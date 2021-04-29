<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'costly', 'foodType', 'venureType', 'description', 'rating', 'ratingAmount', 'photo'];
}
