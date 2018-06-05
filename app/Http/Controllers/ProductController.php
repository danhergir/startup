<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductReview;
use App\User;

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
}
