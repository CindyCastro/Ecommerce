<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /* asignacion masiva */
    protected $fillable = ['name', 'slug', 'image', 'icon'];

    /* Relacion uno a muchos */
    public function subcategories(){
        return $this->hasMany(Subcategory::class);
    }

    /* relacion muchos amuchos */

    public function brands(){
        return $this->belongsToMany(Brand::class);
    }

    /* Relacion entre categoria y productos */

    public function products(){
        return $this->hasManyThrough(Product::class, Subcategory::class);
    }
}
