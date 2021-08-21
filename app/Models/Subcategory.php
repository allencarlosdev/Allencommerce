<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    //relationship one to many
    public function products(){
        return $this->hasMany(Product::class);
    }

    //relationship one to many reverse
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
