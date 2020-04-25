<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','price','description'];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
