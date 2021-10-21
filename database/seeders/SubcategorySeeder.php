<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategories = [
            /* Celulares y tablets */
            [
                'category_id' => 1,
                'name' => 'Celulares y smarphones',
                'slug' => Str::slug('Celulares y smartphones'),
                'color' => true
            ],

            [
                'category_id' => 1,
                'name' => 'Accesorios para celulares',
                'slug' => Str::slug('Accesorios para celulares'),
                
            ],

            [
                'category_id' => 1,
                'name' => 'Smartwactches',
                'slug' => Str::slug('Smartwactches'),
                
            ],

             /* Tv, audio y video */
            [
                'category_id' => 2,
                'name' => 'Tv y audio',
                'slug' => Str::slug('Tv y audio'),
            ],

            [
                'category_id' => 2,
                'name' => 'Audios',
                'slug' => Str::slug('Audios'),
            ],

            [
                'category_id' => 2,
                'name' => 'Audio para autos',
                'slug' => Str::slug('Audio para autos'),
            ],

            /* Consola y videojuegos */
            [
                'category_id' => 3,
                'name' => 'Xbox',
                'slug' => Str::slug('Xbox'),
            ],

            [
                'category_id' => 3,
                'name' => 'Play Station',
                'slug' => Str::slug('Play Station'),
            ],

            [
                'category_id' => 3,
                'name' => 'Videojuegos para pc',
                'slug' => Str::slug('Videojuegos para pc'),
            ],

            [
                'category_id' => 3,
                'name' => 'Nintendo',
                'slug' => Str::slug('Nintendo'),
            ],

            /* Computacion */
            [
                'category_id' => 4,
                'name' => 'Portatiles',
                'slug' => Str::slug('Portatiles'),
            ],

            [
                'category_id' => 4,
                'name' => 'Pc escritorio',
                'slug' => Str::slug('Pc escritorio'),
            ],

            [
                'category_id' => 4,
                'name' => 'Almacenamiento',
                'slug' => Str::slug('ALmacenamiento'),
            ],

            [
                'category_id' => 4,
                'name' => 'Accesorios Computadoras',
                'slug' => Str::slug('Accesorios Computadoras'),
            ],

            /* Modas */
            [
                'category_id' => 5,
                'name' => 'Mujeres',
                'slug' => Str::slug('Mujeres'),
                'color'=>true,
                'size'=> true
            ],

            [
                'category_id' => 5,
                'name' => 'Hombres',
                'slug' => Str::slug('Hombres'),
                'color'=>true,
                'size'=> true
            ],

            [
                'category_id' => 5,
                'name' => 'Lentes',
                'slug' => Str::slug('Lentes'),
            ],

            [
                'category_id' => 5,
                'name' => 'Relojes',
                'slug' => Str::slug('Relojes'),
            ],

            
        ];

        foreach ($subcategories as $subcategory) {
            Subcategory::factory(1)->create($subcategory);
        }
    }
}
