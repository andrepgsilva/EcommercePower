<?php

use App\Models\Category;
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
            'name' => 'Technology',
            'slug' => 'tech',
            'order' => 1,
        ]);

        Category::create([
            'name' => 'Computers',
            'slug' => 'computers',
            'parent_id' => 1,
            'order' => 2,
        ]);
    }
}
