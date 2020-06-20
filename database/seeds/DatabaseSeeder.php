<?php

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        Category::create([
            'name' => 'Smartphones',
            'slug' => 'smartphones',
            'order' => 1,
        ]);

        Category::create([
            'name' => 'Computers',
            'slug' => 'computers',
            'order' => 2,
        ]);

        Category::create([
            'name' => 'Watches',
            'slug' => 'watches',
            'order' => 3,
        ]);

        Category::create([
            'name' => 'Xiaomi Watches',
            'slug' => 'xiaomi-watches',
            'order' => 4,
            'parent_id' => 3
        ]);

        Product::create([
            'name' => 'Ideapad L340',
            'slug' => 'ideal340',
            'price' => 6000,
        ]);

        Product::create([
            'name' => 'Mi Band 5',
            'slug' => 'miband5',
            'price' => 3500,
        ]);
    }
}
