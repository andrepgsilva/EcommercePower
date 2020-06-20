<?php

namespace Tests\Feature\Products;

use App\Models\Product;
use Tests\TestCase;

class ProductIndexTest extends TestCase
{
    public function test_it_shows_a_collection_of_products()
    {
        $products = factory(Product::class)->create();

        $response = $this->json('GET', 'api/products');

        $products->each(function ($product) use ($response) {
            $response->assertJsonFragment(
                [
                    'name' => $product->name,
                    'slug' => $product->slug,
                    'description' => $product->description,
                ]
            );
        });
    }

    public function test_it_has_paginated_data()
    {
        $this->json('GET', 'api/products')
            ->assertJsonStructure([
                'meta',
            ]);
    }
}
