<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        if (env('APP_ENV') === 'local') {
            // password by default is password
            \App\Models\User::factory()->withPersonalTeam()->create([
                'name'  => 'Admin user',
                'email' => 'admin@example.com',
            ]);
        }
    }
}
