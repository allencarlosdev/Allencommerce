<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    //relationship one to many
    public function products(){
        return $this->hasMany(Product::class);
    }

    //relationship many to many
    public function categories(){
        return $this->belongsToMany(Category::class);
    }
}
