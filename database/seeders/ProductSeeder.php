<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Product;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::factory(150)->create()->each(function(Product $product){
            Image::factory(4)->create([
                'imageable_id'=>$product->id,
                'imageable_type' => Product::class
            ]);
        });
    }
}
