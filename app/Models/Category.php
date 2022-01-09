<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name','slug','image','icon'];

    //relacion uno a muchos
    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }

    //relacion de muchos a muchos
    public function brands()
    {
        return $this->belongsToMany(Brand::class);
    }

    //relacion atraves de otra relacion
    public function products()
    {
        return $this->hasManyThrough(Product::class, Subcategory::class);
    }
}
