<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    //relationship one to many reverse
    public function brand(){
        return $this->belongsTo(Brand::class);
    }
    //relationship one to many reverse
    public function subcategory(){
        return $this->belongsTo(Subcategory::class);
    }

    //relationship many to many
    public function colors(){
        return $this->belongsToMany(Color::class);
    }

    //relationship one to many
    public function sizes(){
        return $this->hasMany(Size::class);
    }

    //relationship one to many polymorphic
    public function images(){
        return $this->morphMany(Image::class, "imageable");
    }


}
