# Changelog

All notable changes to this project are documented here.

## Unreleased

### Fixed

- **MaybeInaccessibleMessage** now extends `Message` so nested `chat` / `from` / … hydrate correctly on callback updates (no more `Attempt to read property "id" on array`).
- **NectarHydrator** merges `JSON_PROPERTY_MAP` from parent classes → child; an empty child map no longer wipes parent mappings.
- **InteractsWithMessage** uses safe `messageChatId()` for object|array `chat`, and `detectMedia()` tolerates array `PhotoSize` rows.
- **Telegram::detectInlineKeyboard** treats plain arrays with `callback_data` / `url` / … as inline (not reply keyboards).
- **File** restores Jeely 1.x convenience `file_url` after `withTelegram()` (`{baseUri}file/bot{token}/{file_path}`), so avatar/download streams no longer call `file_get_contents('')`.
- **Telegram::prepareFields** captures `$appendSignature` in the recursive walk closure (no undefined-variable warning when appending signature), restores `sign` semantics (`true`/absent appends signature, `false` skips), and **unsets `sign` before the API request** (Telegram rejects unknown fields — this was breaking `answerCallbackQuery` / edits that pass `sign => false`).
- **UpdateDispatcher** default error path writes the full exception (file/line/stack) to STDERR instead of `trigger_error()` that pointed stacks at UpdateDispatcher itself.
- **CallbackQuery::answer** accepts legacy `answer('msg', ['sign' => false])` (options array as 2nd arg) without TypeError.
- **InlineQuery::answer** unwraps legacy `answer(['results' => …, 'is_personal' => …])` payloads.
- **ChatMember** is a real discriminated union (`status` → Owner/Administrator/Member/Restricted/Left/Banned) via `UNION_MAP` in NectarHydrator, so `new_chat_member.user` hydrates as `User` (fixes `Attempt to read property "id" on array` on chat_member updates). Concrete subtypes now extend `ChatMember`.

### Changed

- Canonical inline answer form remains `answer(array $results, array $options = [])`; assoc payloads with a `results` key stay supported for BC.
- `User::$full_name` continues to be set in `InteractsWithUser::booted()` from `first_name` + `last_name` (shared context).

## 2.1.0 — 2026-08-28

### Added

- **Step Manager** (`Jeely\Steps`) — multi-step conversation flows with `enter` / `handle` / `validate`, flow-level and per-step data, TTL sessions, and navigation (`next`, `back`, `jump`, `repeat`, `stay`, `cancel`, `complete`). Stores: `ArrayStepStore`, `CacheStepStore`. Validators via `StepValidators`.
- **Cache** (`Jeely\Cache`) — `CacheInterface` with `ArrayCache`, `FileCache`, `ApcuCache`, and static `Cache` facade (`get`, `set`, `remember`, etc.).
- **Database / ORM** (`Jeely\Database`) — PDO `Connection`, `QueryBuilder`, `Schema` / `Blueprint`, Active Record `Model` with casts and fillable attributes.
- **Logger** (`Jeely\Log`) — leveled logging with pluggable writers; `Logger::stderr()` and `NullLogger`.
- **HTTP server** (`Jeely\Server\HttpServer`) — minimal webhook listener using PHP sockets and Revolt.
- **Async utilities** — `Loop`, `Timer` helpers.
- Tests for Cache, ORM, and Step Manager (34 tests total).

### Changed

- Rich message support (`sendRichMessage`, `sendRichMessageDraft`) in Telegram client.
- Updater / async polling improvements.
- `.gitignore` updated for local examples and runtime storage.

## 2.0.0

- Replaced LazyJsonMapper with Nectar; modernized Bot API layer.
