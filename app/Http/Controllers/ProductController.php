<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductReview;
use App\User;
use App\Cart;
use Session;

class ProductController extends Controller
{
    public function getIndex()
    {
        $products = Product::all();
        return view('welcome.index', ['products' => $products]);
    }

    public function showOne(Product $product, ProductReview $productReview)
    {
        return view('welcome.show', ['product' => $product, 'productReview' => $productReview]);
    }

    public function createFormReview(Product $product) 
    {  
        return view('product.reviews',  ['product' => $product]);
    }

    public function getCart()
    {
        if(!Session::has('cart'))
        {
            return view('user.cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $products = $cart->items;
        return view('user.cart', ['cart' => $cart, 'products' => $products, 'totalPrice' => $cart->totalPrice]);
    }

    public function addCart(Request $request) {
        $id = request('product_id');
        $qty = request('qty');
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $id, $qty);

        $request->session()->put('cart', $cart);
        
        return redirect()->route('user.cart');
    }
}
