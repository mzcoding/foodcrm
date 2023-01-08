<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Cuisine;
use App\Models\Product;
use App\Models\Restaurant;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
       // $this->call(RolesSeeder::class);

        Restaurant::factory(10)->create();
        Cuisine::factory(10)->create();
        Category::factory(5)->create();
        Product::factory(10)->create();
    }
}
