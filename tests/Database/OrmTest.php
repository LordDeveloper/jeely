<?php

declare(strict_types=1);

require __DIR__ . '/../bootstrap.php';

use Jeely\Database\Connection;
use Jeely\Database\Model;

final class DbUser extends Model
{
    protected static ?string $table = 'users';

    protected static array $fillable = ['name', 'telegram_id', 'meta', 'active'];

    protected static array $casts = [
        'telegram_id' => 'int',
        'active' => 'bool',
        'meta' => 'array',
    ];
}

return [
    'database_schema_and_query_builder' => function (): void {
        $db = Connection::sqlite(':memory:');
        Connection::setDefault($db);

        $db->schema()->create('users', function ($table) {
            $table->id();
            $table->string('name');
            $table->integer('telegram_id');
            $table->text('meta', true);
            $table->boolean('active');
            $table->timestamps();
        });

        assertTrue($db->schema()->hasTable('users'));

        $db->query()->table('users')->insert([
            'name' => 'ali',
            'telegram_id' => 1001,
            'meta' => json_encode(['lang' => 'fa']),
            'active' => 1,
            'created_at' => '2026-01-01 00:00:00',
            'updated_at' => '2026-01-01 00:00:00',
        ]);

        $row = $db->query()->table('users')->where('telegram_id', 1001)->first();
        assertSame('ali', $row['name'] ?? null);
        assertSame(1, $db->query()->table('users')->count());

        $updated = $db->query()->table('users')->where('telegram_id', 1001)->update(['name' => 'sara']);
        assertSame(1, $updated);
        assertSame('sara', $db->query()->table('users')->where('telegram_id', 1001)->value('name'));
    },

    'orm_model_crud' => function (): void {
        $db = Connection::sqlite(':memory:');
        Model::setConnection($db);

        $db->schema()->create('users', function ($table) {
            $table->id();
            $table->string('name');
            $table->integer('telegram_id');
            $table->text('meta', true);
            $table->boolean('active');
            $table->timestamps();
        });

        $user = DbUser::create([
            'name' => 'reza',
            'telegram_id' => 42,
            'meta' => ['role' => 'admin'],
            'active' => true,
        ]);

        assertTrue($user->id !== null);
        assertSame('reza', $user->name);
        assertSame(42, $user->telegram_id);
        assertSame(['role' => 'admin'], $user->meta);
        assertTrue($user->active);

        $found = DbUser::find($user->id);
        assertInstanceOf(DbUser::class, $found);
        assertSame('reza', $found->name);

        $found->name = 'nima';
        $found->save();

        $again = DbUser::where('telegram_id', 42)->first();
        assertSame('nima', $again->name);

        $all = DbUser::all();
        assertSame(1, count($all));

        assertTrue($again->delete());
        assertSame(0, DbUser::query()->count());
    },
];
