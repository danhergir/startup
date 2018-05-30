<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['imageUrl', 'image1', 'image2', 'image3', 'title', 'description', 'price'];    

    public function reviews() {
        return $this->hasMany(ProductReview::class);
    }

    public function countReviews() {
        $reviews = $this->reviews()->count();
        
        if($reviews == 0) {
            return 'No reviews until now';
        }
        elseif ($reviews == 1) {
            return '1 review';
        }
        else {
            return "$reviews reviews";
        }
    }

    public function getStarRating() {
        $count = $this->reviews()->count();
    
        if(empty($count))
        {
            return 0;
        }
    
        $starCountSum = $this->reviews()->sum('rating');
        $average = $starCountSum/$count;
        

        return ceil($average);
    }
}
