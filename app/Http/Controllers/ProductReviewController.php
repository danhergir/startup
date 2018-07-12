<?php

namespace App\Http\Controllers;

use App\ProductReview;
use App\Product;
use App\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ProductReviewController extends Controller
{
    public function postLike(Request $request) 
    {   
        $review_id = $request['reviewId'];
        $is_like = $request['isLike'] === 'true';
        $update = false;
        $review = ProductReview::find($review_id);
        if(!$review) {
            return null;    
        }
        $user = Auth::user();
        $like = $user->likes()->where('review_id', $review_id)->first();
        if($like) {
            $already_like = $like->like;
            $update = true;
            if($already_like == $is_like) {
                $like->delete();
                return null;
            }
        } else {
            $like = new Like();
        }
        $like->like = $is_like;
        $like->user_id = $user->id;
        $like->review_id = $review->id;
        if ($update) {
            $like->update();
        } else {
            $like->save();
        }
        return null;
        
    }
}
