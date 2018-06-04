<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable = ['user_id', 'review_id', 'like'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function review() {
        return $this->belongsTo(ProductReview::class);
    }
}
