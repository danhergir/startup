<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['first_name', 'last_name', 'street_address', 'street_address2', 'country', 'city', 'state_province', 'phone_number', 'phone_number2', 'address_type'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
