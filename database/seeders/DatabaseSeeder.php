<?php

namespace Database\Seeders;


use App\Models\Subcategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        /* \App\Models\Product::factory(250)->create(); */
       
        Storage::deleteDirectory('public/categories');/* Elimina carpetas */
        Storage::deleteDirectory('subcategories');

        Storage::makeDirectory('public/categories');  /* crea la carpeta products */
        Storage::makeDirectory('subcategories');
        
        
        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(SubcategorySeeder::class);
        $this->call(ProductSeeder::class);
    }
}
