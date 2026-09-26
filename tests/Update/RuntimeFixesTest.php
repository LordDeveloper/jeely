<?php

declare(strict_types=1);

namespace Jeely\Api\Types {
    /**
     * Child that declares an empty map — must still inherit parent Message mappings.
     */
    final class EmptyMapChildMessage extends Message
    {
        public const JSON_PROPERTY_MAP = [];
    }
}

namespace {
    require __DIR__ . '/../bootstrap.php';

    use Jeely\Api\Types\CallbackQuery;
    use Jeely\Api\Types\Chat;
    use Jeely\Api\Types\ChatMemberLeft;
    use Jeely\Api\Types\ChatMemberMember;
    use Jeely\Api\Types\EmptyMapChildMessage;
    use Jeely\Api\Types\File;
    use Jeely\Api\Types\InlineQuery;
    use Jeely\Api\Types\MaybeInaccessibleMessage;
    use Jeely\Api\Types\Message;
    use Jeely\Api\Types\User;
    use Jeely\Api\Update;
    use Jeely\Telegram;
    use Jeely\Tools\Button;
    use Jeely\Update\UpdateDispatcher;

    final class RuntimeFixFakeTelegram extends Telegram
    {
        /** @var array<int, array{method:string,params:array<string,mixed>}> */
        public array $calls = [];

        public function __construct()
        {
            parent::__construct('0:TEST');
        }

        public function __call(string $name, array $arguments = []): mixed
        {
            $params = $arguments[0] ?? [];
            if (! is_array($params)) {
                $params = [];
            }

            $this->calls[] = ['method' => $name, 'params' => $params];

            if (in_array($name, ['answerCallbackQuery', 'answerInlineQuery', 'sendChatAction', 'deleteMessage'], true)) {
                return true;
            }

            return new Message([
                'message_id' => 1,
                'date' => 1,
                'chat' => ['id' => $params['chat_id'] ?? 1, 'type' => 'private'],
            ]);
        }
    }

    return [
        'callback_query_message_chat_hydrates_as_chat' => function (): void {
            $update = new Update([
                'update_id' => 1,
                'callback_query' => [
                    'id' => 'cq-1',
                    'from' => ['id' => 9, 'is_bot' => false, 'first_name' => 'Ada'],
                    'chat_instance' => 'x',
                    'data' => 'ok',
                    'message' => [
                        'message_id' => 5,
                        'date' => 1700000000,
                        'chat' => ['id' => 42, 'type' => 'private'],
                        'from' => ['id' => 1, 'is_bot' => true, 'first_name' => 'Bot'],
                        'text' => 'hello',
                    ],
                ],
            ]);

            $cq = $update->callback_query;
            assertInstanceOf(CallbackQuery::class, $cq);
            assertInstanceOf(MaybeInaccessibleMessage::class, $cq->message);
            assertInstanceOf(Chat::class, $cq->message->chat);
            assertSame(42, $cq->message->chat->id);
            assertFalse(is_array($cq->message->chat));
        },

        'chat_member_union_hydrates_user_as_user_object' => function (): void {
            $update = new Update([
                'update_id' => 3,
                'chat_member' => [
                    'chat' => ['id' => -1001, 'type' => 'channel', 'title' => 'Support'],
                    'from' => ['id' => 42, 'is_bot' => false, 'first_name' => 'Ada'],
                    'date' => 1700000000,
                    'old_chat_member' => [
                        'status' => 'left',
                        'user' => ['id' => 42, 'is_bot' => false, 'first_name' => 'Ada'],
                    ],
                    'new_chat_member' => [
                        'status' => 'member',
                        'user' => ['id' => 42, 'is_bot' => false, 'first_name' => 'Ada'],
                    ],
                ],
            ]);

            $event = $update->chat_member;
            assertInstanceOf(ChatMemberMember::class, $event->new_chat_member);
            assertInstanceOf(ChatMemberLeft::class, $event->old_chat_member);
            assertInstanceOf(User::class, $event->new_chat_member->user);
            assertSame(42, $event->new_chat_member->user->id);
            assertFalse(is_array($event->new_chat_member->user));
            assertSame('member', $event->new_chat_member->status);
        },

        'maybe_inaccessible_message_nested_chat_not_raw_array' => function (): void {
            $message = new MaybeInaccessibleMessage([
                'message_id' => 3,
                'date' => 1700000000,
                'chat' => ['id' => 99, 'type' => 'private'],
                'text' => 'hi',
            ]);

            assertInstanceOf(Chat::class, $message->chat);
            assertSame(99, $message->chat->id);
            assertSame('hi', $message->text);
        },

        'message_chat_id_works_for_object_and_array_chat' => function (): void {
            $asObject = new Message([
                'message_id' => 1,
                'date' => 1,
                'chat' => ['id' => 10, 'type' => 'private'],
            ]);
            assertSame(10, $asObject->messageChatId());
            assertInstanceOf(Chat::class, $asObject->chat);

            $raw = new Message([
                'message_id' => 2,
                'date' => 1,
                'chat' => ['id' => 20, 'type' => 'group'],
            ]);

            // Force mapped cache to hold a raw array (defense path).
            $hydrator = new ReflectionClass(\Jeely\Update\NectarHydrator::class);
            $mapped = $hydrator->getProperty('mapped');
            $mapped->setAccessible(true);
            $mapped->setValue($raw, ['chat' => ['id' => 20, 'type' => 'group']]);

            assertSame(20, $raw->messageChatId());
        },

        'message_reply_safe_when_chat_is_array' => function (): void {
            $telegram = new RuntimeFixFakeTelegram();
            $message = (new Message([
                'message_id' => 7,
                'date' => 1,
                'chat' => ['id' => 55, 'type' => 'private'],
                'text' => 'x',
            ]))->withTelegram($telegram);

            $hydrator = new ReflectionClass(\Jeely\Update\NectarHydrator::class);
            $mapped = $hydrator->getProperty('mapped');
            $mapped->setAccessible(true);
            $mapped->setValue($message, ['chat' => ['id' => 55, 'type' => 'private']]);

            $message->reply('pong');

            assertSame('sendMessage', $telegram->calls[0]['method']);
            assertSame(55, $telegram->calls[0]['params']['chat_id']);
        },

        'detect_media_tolerates_array_photo_size_rows' => function (): void {
            $message = new Message([
                'message_id' => 1,
                'date' => 1,
                'chat' => ['id' => 1, 'type' => 'private'],
                'photo' => [
                    ['file_id' => 'small', 'width' => 1, 'height' => 1],
                    ['file_id' => 'large', 'width' => 100, 'height' => 100],
                ],
            ]);
            $message->withTelegram(new Telegram('0:TEST'));

            assertTrue((bool) ($message['is_media'] ?? false));
            assertSame('photo', $message['media_type']);
            assertSame('large', $message['file_id']);
        },

        'callback_answer_accepts_options_array_as_second_arg' => function (): void {
            $telegram = new RuntimeFixFakeTelegram();
            $cq = (new CallbackQuery([
                'id' => 'cq-legacy',
                'from' => ['id' => 1, 'is_bot' => false, 'first_name' => 'A'],
                'chat_instance' => 'x',
                'data' => 'ok',
            ]))->withTelegram($telegram);

            $cq->answer('msg', ['sign' => false]);

            assertSame('answerCallbackQuery', $telegram->calls[0]['method']);
            assertSame('msg', $telegram->calls[0]['params']['text']);
            assertFalse($telegram->calls[0]['params']['show_alert']);
            assertFalse($telegram->calls[0]['params']['sign']);
        },

        'callback_answer_bool_show_alert_still_works' => function (): void {
            $telegram = new RuntimeFixFakeTelegram();
            $cq = (new CallbackQuery([
                'id' => 'cq-alert',
                'from' => ['id' => 1, 'is_bot' => false, 'first_name' => 'A'],
                'chat_instance' => 'x',
                'data' => 'ok',
            ]))->withTelegram($telegram);

            $cq->answer('boom', true);

            assertTrue($telegram->calls[0]['params']['show_alert']);
        },

        'user_notify_accepts_named_option_args' => function (): void {
            $telegram = new RuntimeFixFakeTelegram();
            $user = (new User([
                'id' => 42,
                'is_bot' => false,
                'first_name' => 'A',
            ]))->withTelegram($telegram);

            $user->notify(
                text: 'left channel',
                buttons: Button::url('join', 'https://t.me/example'),
                sign: false,
            );

            assertSame('sendMessage', $telegram->calls[0]['method']);
            assertSame(42, $telegram->calls[0]['params']['chat_id']);
            assertSame('left channel', $telegram->calls[0]['params']['text']);
            assertFalse($telegram->calls[0]['params']['sign']);
            assertTrue(isset($telegram->calls[0]['params']['buttons']));
        },

        'inline_answer_unwraps_assoc_results_payload' => function (): void {
            $telegram = new RuntimeFixFakeTelegram();
            $iq = (new InlineQuery([
                'id' => 'iq-1',
                'from' => ['id' => 1, 'is_bot' => false, 'first_name' => 'A'],
                'query' => 'q',
                'offset' => '',
            ]))->withTelegram($telegram);

            $iq->answer([
                'results' => [],
                'is_personal' => true,
                'cache_time' => 1,
            ]);

            assertSame('answerInlineQuery', $telegram->calls[0]['method']);
            assertSame([], $telegram->calls[0]['params']['results']);
            assertTrue($telegram->calls[0]['params']['is_personal']);
            assertSame(1, $telegram->calls[0]['params']['cache_time']);
        },

        'prepare_fields_signature_path_no_undefined_append_signature' => function (): void {
            $telegram = new Telegram('0:TEST');
            $telegram->setSignature('— bot');

            $ref = new ReflectionClass($telegram);
            $method = $ref->getMethod('prepareFields');
            $method->setAccessible(true);

            $fields = $method->invoke($telegram, [
                'chat_id' => 1,
                'text' => 'hello',
            ]);

            assertTrue(str_contains((string) $fields['text'], 'hello'));
            assertTrue(str_contains((string) $fields['text'], '— bot'));

            $fieldsNoSign = $method->invoke($telegram, [
                'chat_id' => 1,
                'text' => 'hello',
                'sign' => false,
            ]);
            assertSame('hello', $fieldsNoSign['text']);
            assertFalse(array_key_exists('sign', $fieldsNoSign));

            $fieldsSignTrue = $method->invoke($telegram, [
                'chat_id' => 1,
                'text' => 'hello',
                'sign' => true,
            ]);
            assertTrue(str_contains((string) $fieldsSignTrue['text'], '— bot'));
            assertFalse(array_key_exists('sign', $fieldsSignTrue));
        },

        'file_builds_file_url_after_with_telegram' => function (): void {
            $telegram = new Telegram('123:ABC');
            $file = (new File([
                'file_id' => 'fid',
                'file_unique_id' => 'uniq',
                'file_path' => 'photos/file_1.jpg',
            ]))->withTelegram($telegram);

            assertSame(
                'https://api.telegram.org/file/bot123:ABC/photos/file_1.jpg',
                $file->file_url
            );
        },

        'prepare_fields_plain_callback_arrays_become_inline_keyboard' => function (): void {
            $telegram = new Telegram('0:TEST');
            $ref = new ReflectionClass($telegram);
            $method = $ref->getMethod('prepareFields');
            $method->setAccessible(true);

            $fields = $method->invoke($telegram, [
                'chat_id' => 1,
                'text' => 'hi',
                'buttons' => [[['text' => 'Go', 'callback_data' => 'go']]],
                'sign' => false,
            ]);

            assertTrue(isset($fields['reply_markup']['inline_keyboard']));
            assertFalse(isset($fields['reply_markup']['keyboard']));
            assertSame('go', $fields['reply_markup']['inline_keyboard'][0][0]['callback_data']);
        },

        'nectar_hydrator_empty_child_map_inherits_parent' => function (): void {
            $child = new EmptyMapChildMessage([
                'message_id' => 11,
                'date' => 1,
                'chat' => ['id' => 77, 'type' => 'private'],
                'text' => 'inherited',
            ]);

            assertInstanceOf(Chat::class, $child->chat);
            assertSame(77, $child->chat->id);
            assertSame('inherited', $child->text);
        },

        'update_dispatcher_default_report_preserves_exception_location' => function (): void {
            $telegram = new Telegram('0:TEST');
            $dispatcher = new UpdateDispatcher($telegram);

            $seen = null;
            $dispatcher->onError(function (Throwable $e) use (&$seen): void {
                $seen = $e;
            });

            $promise = $dispatcher->dispatchOne(
                static function (): never {
                    throw new RuntimeException('boom-from-handler');
                },
                new Update(['update_id' => 9]),
            );
            wait($promise);

            assertInstanceOf(RuntimeException::class, $seen);
            assertSame('boom-from-handler', $seen->getMessage());
            assertTrue(str_contains($seen->getFile(), 'RuntimeFixesTest.php'));
        },
    ];
}
