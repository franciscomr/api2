<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Seeders\Catalog\BranchSeeder;
use Database\Seeders\Catalog\DepartmentSeeder;
use Database\Seeders\Catalog\OrganizationSeeder;
use Database\Seeders\Catalog\PositionSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            OrganizationSeeder::class,
            BranchSeeder::class,
            DepartmentSeeder::class,
            PositionSeeder::class
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
