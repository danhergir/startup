<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductReview;
use App\User;
use App\Cart;
use App\SaveLater;
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

        if(!Session::has('saveLater'))
        {
            return view('user.cart');
        }
        $oldSaveLater = Session::get('saveLater');
        $saveLater = new SaveLater($oldSaveLater);
        $articles = $saveLater->articles;

        return view('user.cart', ['cart' => $cart, 'products' => $products, 'articles' => $articles]);
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

    public function removeItem(Request $request)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $id = request('product_id');
        $cart = new Cart($oldCart); 
        $cart->removeItem($id);

        if(count($cart->items) > 0)
        {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }

        return redirect()->back();
    }

    // Save for later list
    public function addSaveLater(Request $request) {
        $id = request('product_id');
        $product = Product::find($id);
        $oldSaveLater = Session::has('saveLater') ? Session::get('saveLater') : null;
        $saveLater = new SaveLater($oldSaveLater);
        $saveLater->add($product, $id);

        $request->session()->put('saveLater', $saveLater);
        
        return redirect()->route('user.cart');
    }
}
