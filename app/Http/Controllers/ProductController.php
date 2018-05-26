<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function getIndex()
    {
        $products = Product::all();
        return view('welcome.index', ['products' => $products]);
    }

    public function showOne(Product $product)
    {
        return view('welcome.show', ['product' => $product]);
    }

    public function createFormReview(Product $product) 
    {  
        return view('product.reviews', ['product' => $product]);
    }
}
