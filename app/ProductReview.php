<?php

namespace App;
use App\ProductReview;

use Illuminate\Database\Eloquent\Model;

class ProductReview extends Model
{
    protected $fillable = ['headline', 'description', 'rating', 'product_id', 'user_name'];

    public function likes() {
        return $this->hasMany(Like::class);
    }

    public function getLikes() {    
        $count = \DB::table('likes')->where('review_id', $this->id)->where('like', 1)->count();
        return $count;
    }

    public function getDislikes() {
        $count = \DB::table('likes')->where('review_id', $this->id)->where('like', 0)->count();
        return $count;
    }
}

