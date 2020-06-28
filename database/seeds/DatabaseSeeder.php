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
        $ideadpadL340 = Product::create([
            'name' => 'Ideapad L340',
            'slug' => 'ideal340',
            'price' => 6000,
        ]);

        $miband5 = Product::create([
            'name' => 'Mi Band 5',
            'slug' => 'miband5',
            'price' => 3500,
        ]);

        $miband5->categories()->create([
            'name' => 'Watches',
            'slug' => 'watches',
            'order' => 3,
        ]);

        $miband5->variations()->create([
            'name' => 'Global Version'
        ]);

        $miband5->variations()->create([
            'name' => 'Chinese Version'
        ]);

        $ideadpadL340->categories()->create([
            'name' => 'Computers',
            'slug' => 'computers',
            'order' => 2,
        ]);

        Category::create([
            'name' => 'Smartphones',
            'slug' => 'smartphones',
            'order' => 1,
        ]);

        Category::create([
            'name' => 'Xiaomi Watches',
            'slug' => 'xiaomi-watches',
            'order' => 4,
            'parent_id' => 3
        ]);
    }
}
