<?php

namespace App\Http\Controllers;
use App\User;
use App\Address;
use App\ProductReview;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use App\Wishlist;
use \DB;

class UserController extends Controller
{
    // User profile. User account functions.
    public function userProfile() {
        $user = Auth::user();
        return view('user.profile', ['user' => $user]);
    }

    public function userAccount(User $user) {
        $user = Auth::user();
        return view('user.account', compact('user'));
    }
    
    public function nameUpdate(User $user)
    { 
        $this->validate(request(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255'
        ]);

        $user->first_name = request('first_name');
        $user->last_name = request('last_name');

        $user->save();

        return redirect()->back();
    }

    public function emailUpdate(User $user)
    { 
        $this->validate(request(), [
            'email' => 'required|string|email|max:255|unique:users',
        ]);

        $user->email = request('email');

        $user->save();

        return redirect()->back();
    }

    public function passwordUpdate(User $user) {
        $this->validate(request(), [
            'password' => 'required|min:8|confirmed',
        ]);

        $user->password = bcrypt(request('password'));

        $user->save();

        return redirect()->back();
    }

    //User addresses functions

    public function getAddress() {
        $user = Auth::user();
        $addresses = $user->addresses; 

        return view('user.address', ['addresses' => $addresses, 'user' => $user]);
    }

    public function newAddress(User $user, Address $address) {
        $this->validate(request(), [
            'user_id' => 'integer',
            'first_name' => 'required|string|max:20',
            'last_name' => 'required|string|max:20',
            'street_address' => 'required|string|max:20',
            'street_address2' => 'required|string|max:20',
            'country' => 'required|string|max:20',
            'city' => 'required|string|max:20',
            'state_province' => 'required|string|max:20',
            'phone_number' => 'required|string|max:14',
            'phone_number' => 'required|string|max:14',
            'address_type' => 'required|string'
        ]);

        $address->user_id = $user->id;
        $address->first_name = request('first_name');
        $address->last_name = request('last_name');
        $address->street_address = request('street_address');
        $address->street_address2 = request('street_address2');
        $address->country = request('country');
        $address->city = request('city');
        $address->state_province = request('state_province');
        $address->phone_number = request('phone_number');
        $address->phone_number2 = request('phone_number2');
        $address->address_type = request('address_type');

        $address->save();

        return redirect()->back();
    }

    public function deleteAddress(Request $request)
    {   
        $address_id = $request->input('address_id');        
        $address = Address::find($address_id);
    
        if(!empty($address) && $address->user_id === Auth::user()->id){
            // for security- to make sure the delete request is valid and coming from the owner of the address.
           $address->delete();
        }
    
        return redirect()->back();
    }

    // User reviews.

    public function getReviews(User $user)
    {   
        return view('user.review', ['user' => $user]);
    }

    public function deleteReview(Request $request)
    {
        $review_id = $request->input('review_id');
        $review = ProductReview::find($review_id);

        if(!empty($review) && $review->user_id === Auth::user()->id){
           $review->delete();
        }

        return redirect()->back();
    }

    //User wishlists functions
    public function getLists(User $user) {
        $user = Auth::user();
        $products = DB::table('products')->join('wishlists','products.id','wishlists.product_id')->where('user_id', Auth::user()->id)->get();

        return view('user.lists', compact('user', 'products'));
    }

    public function addWishlist(Wishlist $wishlist) {        
        $userId = request('user_id');
        $productId = request('product_id');

        $found = Wishlist::where('user_id', $userId)->where('product_id', $productId)->count();

        if($found == 0) {
            $wishlist->user_id = $userId;
            $wishlist->product_id = $productId;
            $wishlist->save();
        }

        return redirect()->back();
    }

    public function deleteWishlist() {
        $wishlist_id = request('wishlist_id');        
        $wishlist = Wishlist::find($wishlist_id);
    
        if(!empty($wishlist) && $wishlist->user_id === Auth::user()->id){
           $wishlist->delete();
        }
    
        return redirect()->back();
    }
}
