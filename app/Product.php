<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\ProductReview;
use App\Like;
use \DB;

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

    public function countRating($number) {
        $count = DB::table('product_reviews')->where('product_id', $this->id)->where('rating', $number)->count();
        return $count;
    }

    public function ratingPercent($number) {
        $singleRatings = DB::table('product_reviews')->where('product_id', $this->id)->where('rating', $number)->count();

        $totalRatings = DB::table('product_reviews')->where('product_id', $this->id)->select('rating')->count();

        return $singleRatings/$totalRatings*100;
    }
}
