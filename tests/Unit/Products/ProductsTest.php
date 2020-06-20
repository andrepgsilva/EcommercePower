<?php

namespace Tests\Unit\Products;

use Tests\TestCase;
use App\Models\Product;

class ProductsTest extends TestCase
{
    public function test_it_uses_slug_for_the_route_key_name()
    {
        $product = new Product();

        $this->assertEquals($product->getRouteKeyName(), 'slug');
    }
}
