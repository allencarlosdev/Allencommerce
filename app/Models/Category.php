<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'image', 'icon'];

    //relationship one to many
    public function subcategories(){
        return $this->hasMany(Subcategory::class);
    }

    //relationship many to many
    public function brands(){
        return $this->belongsToMany(Brand::class);
    }

    //relationship product - category
    public function products(){
        return $this->hasManyThrough(Product::class, Subcategory::class);
    }

    //Friendly Url

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
