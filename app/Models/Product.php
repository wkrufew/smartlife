<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id','created_at','updated_at'];

    //protected $withCount = ['contacts' , 'reviews'];

    const BORRADOR = 1;
    const PUBLICADO = 2;

    /* public function getRouteKeyName()
    {
        return "slug";   
    } */
    //relacion uno a muchos
    public function sizes()
    {
        return $this->hasMany(Size::class);
    }
    //relacion uno a mucho inversa
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    //relacion mucho a muchos
    public function colors()
    {
        return $this->belongsToMany(Color::class);
    }
    //relacion uno a muchos

    /* public function reviews()
    {
        return $this->hasMany('App\Models\Review');
    } */
    

    public function goals()
    {
        return $this->hasMany('App\Models\Goal');
    }

    //uno a muchos polimorphica
    public function images()
    {
        return $this->morphMany(Image::class,"imageable");
    }
}
