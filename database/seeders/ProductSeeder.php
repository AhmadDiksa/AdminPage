<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'sku' => 'PROD001',
            'name' => 'Product 1',
            'price' => 10000,
        ]);

        Product::create([
            'sku' => 'PROD002',
            'name' => 'Product 2',
            'price' => 20000,
        ]);
    }
}
