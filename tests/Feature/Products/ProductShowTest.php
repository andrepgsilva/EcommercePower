<?php

namespace Tests\Feature\Products;

use Tests\TestCase;
use App\Models\Product;

class ProductShowTest extends TestCase
{
    public function test_if_fails_if_product_can_be_found()
    {
        $this->json('GET', 'api/products/nope')
         ->assertStatus(404);
    }

    public function test_if_shows_a_product()
    {
        $product = factory(Product::class)->create();
        
        $this->json('GET', 'api/products/' . $product->slug)
         ->assertJsonFragment([
             'id' => $product->id
         ]);
    }
}
