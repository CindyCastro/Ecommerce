<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded =['id', 'created_at', 'update_at'];
    
/* Relacion uno a muchos  */
    public function sizes(){
        return $this->hasMany(Size::class);
    }


    /* Relacion uno a muchos inversa */
    public function brand(){
        return $this->belongsTo(Brand::class);
    }


    public function subcategory(){
        return $this->belongsTo(Subcategory::class);
    }

/* relacion muchos a muchos con colores y producto */

    public function colors(){
        return $this->hasMany(Color::class);
    }

 /* Relacion uno a muchos polimorfica */ 

    public function images(){
        return $this->morphToMany(Image::class, "imageable");
    } 
}
