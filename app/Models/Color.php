<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    //relationship many to many
    public function products(){
        return $this->belongsToMany(Product::class);
    }
    //relationship many to many
    public function sizes(){
        return $this->belongsToMany(Size::class);
    }
}
