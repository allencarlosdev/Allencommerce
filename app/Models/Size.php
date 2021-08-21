<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;

    protected $fillable = ['name','product_id'];

    //relationship one to many reverse
    public function product(){
        return $this->belongsTo(Product::class);
    }
    //relationship many to many
    public function colors(){
        return $this->belongsToMany(Color::class);
    }
}
