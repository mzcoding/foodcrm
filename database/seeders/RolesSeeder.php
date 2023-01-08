<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        \DB::table('roles')->insert([
            [
               'name' => 'Admin',
               'guard_name' => 'web',
               'created_at' => \now(),
               'updated_at' => \now(),
            ],
            [
                'name' => 'Owner',
                'guard_name' => 'web',
                'created_at' => \now(),
                'updated_at' => \now(),
            ],
            [
                'name' => 'Customer',
                'guard_name' => 'web',
                'created_at' => \now(),
                'updated_at' => \now(),
            ]
        ]);
    }
}
