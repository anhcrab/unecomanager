<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\AccessPermission;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run() : void
    {
        // \App\Models\User::factory(10)->create();

        // User::factory()->create([
        //     'uuid' => Str::uuid()->toString(),
        //     'name' => "Developer",
        //     'email' => "anhcrafter@gmail.com",
        //     'password' => bcrypt('Terus@123'),
        // ]);

        // for ($i = 0; $i < 10; $i++) {
        //     User::factory()->create([
        //         'uuid' => Str::uuid()->toString(),
        //         'name' => "Test User $i",
        //         'email' => "test$i@example.com",
        //         'password' => bcrypt('Terus@123'),
        //     ]);
        // }

        // AccessPermission::factory()->create([
        //     'uuid' => Str::uuid()->toString(),
        //     'name' => 'all',
        // ]);

        // AccessPermission::factory()->create([
        //     'uuid' => Str::uuid()->toString(),
        //     'name' => 'create-orders',
        // ]);

        // AccessPermission::factory()->create([
        //     'uuid' => Str::uuid()->toString(),
        //     'name' => 'approve-orders',
        // ]);

        User::factory()->create([
            // 'uuid' => Str::uuid()->toString(),
            'name' => "Developer",
            'email' => "anhcrafter@gmail.com",
            'password' => bcrypt('Terus@123'),
        ]);

        for ($i = 0; $i < 10; $i++) {
            User::factory()->create([
                // 'uuid' => Str::uuid()->toString(),
                'name' => "Test User $i",
                'email' => "test$i@example.com",
                'password' => bcrypt('Terus@123'),
            ]);
        }

        AccessPermission::factory()->create([
            // 'uuid' => Str::uuid()->toString(),
            'name' => 'all',
        ]);

        AccessPermission::factory()->create([
            // 'uuid' => Str::uuid()->toString(),
            'name' => 'create-orders',
        ]);

        AccessPermission::factory()->create([
            // 'uuid' => Str::uuid()->toString(),
            'name' => 'approve-orders',
        ]);
    }
}
