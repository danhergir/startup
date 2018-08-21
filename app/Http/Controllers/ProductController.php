<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Product;
use App\ProductReview;
use App\User;
use App\Cart;
use App\SaveLater;
use Coingate\Coingate;
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
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $articles = $cart->items;
        if($articles) {
            foreach($articles as $article) {
                if($article['item']->id == $product->id) {
                    return view('welcome.show', ['article' => $article, 'product' => $product, 'productReview' => $productReview]);
                }
            }
        }
        return view('welcome.show', ['product' => $product, 'productReview' => $productReview]);
    }

    public function createFormReview(Product $product) 
    {  
        return view('product.reviews',  ['product' => $product]);
    }

    public function getCart()
    {
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $products = $cart->items;

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

    public function cartUpdate(Request $request, $id) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $quantity = request('quantity');
        $product = Product::find($id);


        $cart->updateItem($product, $id, $quantity);

        Session::put('cart', $cart);

        return response()->json(['success' => true]);

    } 

    public function removeItem($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
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
        $qty = request('product_qty');
        $oldSaveLater = Session::has('saveLater') ? Session::get('saveLater') : null;
        $saveLater = new SaveLater($oldSaveLater);
        $saveLater->add($product, $id, $qty);

        $request->session()->put('saveLater', $saveLater);

        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart); 
        $cart->removeItem($id);

        if(count($cart->items) > 0)
        {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }
        
        return redirect()->route('user.cart');
    }

    public function removeSaveLater($id) {
        $oldSaveLater = Session::has('saveLater') ? Session::get('saveLater') : null;
        $saveLater = new SaveLater($oldSaveLater); 
        $saveLater->remove($id);

        if(count($saveLater->articles) > 0)
        {
            Session::put('saveLater', $saveLater);
        } else {
            Session::forget('saveLater');
        }

        return redirect()->back();
    }

    public function moveCart(Request $request) {
        $id = request('product_id');
        $qty = request('qty');
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $id, $qty);

        $request->session()->put('cart', $cart);

        $oldSaveLater = Session::has('saveLater') ? Session::get('saveLater') : null;
        $saveLater = new SaveLater($oldSaveLater); 
        $saveLater->remove($id);

        if(count($saveLater->articles) > 0)
        {
            Session::put('saveLater', $saveLater);
        } else {
            Session::forget('saveLater');
        }
        
        return redirect()->route('user.cart');
    }

    //Checkout 
    public function checkout() {
        $user = Auth::user();
        $addresses = $user->addresses;

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $articles = $cart->items;
        
        if($oldCart == null) {
            return redirect()->back();
        }   

        //Coingate API Service    

        \CoinGate\CoinGate::config(array(
            'environment'               => 'sandbox', // sandbox OR live
            'auth_token'                => env('COINGATE_AUTH'),
            'curlopt_ssl_verifypeer'    => TRUE // default is false
        ));

        $post_params = array(
            'order_id'          => '001',
            'price_amount'      => $cart->totalPrice,
            'price_currency'    => 'USD',
            'receive_currency'  => 'USD',
            'callback_url'      => 'https://localhost::8000',
            'cancel_url'        => 'https://localhost::8000',
            'success_url'       => 'https://localhost::8000',
            'title'             => 'Order #001',
            'description'       => 'Xbox One Controller'
        );

        $order = \CoinGate\Merchant\Order::create($post_params);

        if ($order) {
        
        $url_payment = $order->payment_url;
        } else {
        # Order Is Not Valid
        }
        
        return view('user.checkout', ['addresses' => $addresses, 'cart' => $cart, 'articles' => $articles, 'url_payment' => $url_payment]);
    }

