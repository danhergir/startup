<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['imageUrl', 'image1', 'image2', 'image3', 'title', 'description', 'price'];    
}
