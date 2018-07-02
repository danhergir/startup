@extends('layouts.app')

@section('title')
    User Cart
@endsection

@section('content')
@if(Session::has('cart'))
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header bg-white">
                <h3 class="font-weight-bold">Your cart: {{ $cart->totalQty}} items</h3>
            </div>
        </div>
        
        <div class="col-md-8">
            <div class="card-body w-100 ml-3" style="padding:0;">
                <div class="row" style="margin-right:0px">
                    @foreach($products as $product)
                    <div class="card border-bottom border-left" style="border-radius:0px">
                        <div class="card-images d-inline-flex" style="width:745px">
                            <div class="card mr-4" style="width:200px; padding:15px;">
                                <img class="card-img-top img-fluid" style="padding:10px" src="{{ $product['item']->imageUrl }}" alt="Card image cap"></a>
                            </div>
                            <div class="card-body mt-4">
                                <a href="#" class="text-dark"><h5>{{ $product['item']->title }}</h5></a>
                                <h6 class="mt-2">Qty</h6>
                                <p>
                                    <select name="quantity" id="quantity">
                                        <option value="#">{{$product['qty']}}</option>
                                    </select>
                                </p>
                                <!-- Select quantity
                                <p>
                                    <select name="quantity" id="quantity">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </p>
                                -->
                                <div class="form-buttons d-inline-flex">
                                    <form method="POST" action="{{ route('user.removeItem') }}" id="item-remove">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="product_id" value="{{ $product['item']->id }}">
                                        <a style="cursor:pointer" class="text-dark mr-2" onclick="document.getElementById('item-remove').submit();"><u>Remove</u></a>
                                    </form>
                                    |
                                    <form method="POST" action="{{ route('user.saveLater') }}" id="save-later">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="product_id" value="{{ $product['item']->id }}">
                                        <a style="cursor:pointer" class="text-dark ml-2" onclick="document.getElementById('save-later').submit();"><u>Save for later</u></a>
                                    </form>
                                </div>
                            </div>
                            <div class="card-body mt-4 mr-4">
                                <h5><strong>${{ $product['item']->price }}</strong></h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-4 border-left">
            <div class="card-body w-100 ml-3 mt-3" style="padding:0;">
                <div class="row" style="margin-right:0px">
                    <div class="card-checkout d-inline-flex w-100 border-bottom">
                        <div class="card mt-4 mr-4">
                            <h6>Subtotal ({{ $cart->totalQty}} items)</h6>
                            <h6>Shipping</h6>
                            <h5 class="mt-3">Est. total</h5>
                        </div>
                        <div class="card mt-4 ml-4">
                            <h6>${{ $cart->totalPrice}}</h6>
                            <h6>Free</h6>
                            <h5 class="font-weight-bold mt-3">${{ $cart->totalPrice}}</h5>
                        </div>
                    </div>
                </div>
                <div class="button-checkout mt-3 pr-4">
                    <button class="btn btn-primary w-100 text-center" style="border-radius:20px">Checkout</button>
                </div>
            </div>
        </div>
    </div>
</div>
@else
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header bg-white">
                <h3 class="font-weight-bold">Your cart: 0 items</h3>
            </div>
        </div>
        
        <div class="col-md-8">
            <div class="card-body w-100 ml-3 mt-3" style="padding:0;">
                <div class="row" style="margin-right:0px">
                    <div class="card-title">
                        <h5 class="text-muted">Your cart is empty!</h5>
                        <h5 class="text-muted">Add new things to your cart. <a href="{{ route('welcome.index') }}">Go on shopping now!</a></h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 border-left">
            <div class="card-body w-100 ml-3 mt-3" style="padding:0;">
                <div class="row" style="margin-right:0px">
                    <div class="card-checkout d-inline-flex w-100 border-bottom">
                        <div class="card mt-4 mr-4">
                            <h6>Subtotal (0 items)</h6>
                            <h6>Shipping</h6>
                            <h5 class="mt-3">Est. total</h5>
                        </div>
                        <div class="card mt-4 ml-4">
                            <h6>$0.00</h6>
                            <h6>Free</h6>
                            <h5 class="font-weight-bold mt-3">$0.00</h5>
                        </div>
                    </div>
                </div>
                <div class="button-checkout mt-3 pr-4">
                    <button class="btn btn-primary w-100 text-center" style="border-radius:20px">Checkout</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@if(Session::has('saveLater'))
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header mt-3 bg-white">
                <h3 class="font-weight-bold">Saved for later</h3>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card-body w-100 ml-3" style="padding:0;">
                <div class="row" style="margin-right:0px">
                @foreach($articles as $article['article'])
                    @foreach($article['article'] as $item)
                        <div class="card border-bottom border-right border-left" style="border-radius:0px">
                            <div class="card-images d-inline-flex" style="width:745px">
                                <div class="card mr-4" style="width:200px">
                                    <img class="card-img-top img-fluid" style="padding:10px" src="{{ $item->imageUrl }}" alt="Card image cap"></a>
                                </div>
                                <div class="card-body mt-4">
                                    <a href="#" class="text-dark"><h5>{{ $item->title }}</h5></a>
                                    <h6 class="mt-2">Qty</h6>
                                    <p>
                                        Number of items
                                    </p>
                                    <!-- Select quantity
                                    <p>
                                        <select name="quantity" id="quantity">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </p>
                                    -->
                                    <div class="form-buttons d-inline-flex">
                                        <form method="POST" action="{{ route('user.removeSaveLater') }}" id="remove">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="product_id" value="{{ $item->id }}">
                                            <a style="cursor:pointer" class="text-dark mr-2" onclick="document.getElementById('remove').submit();"><u>Remove</u></a>
                                        </form>
                                        |
                                        <form action="{{ route('user.moveCart') }}" id="moveCart">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="qty" value="1">
                                            <input type="hidden" name="product_id" value="{{ $item->id }}">
                                            <a style="cursor:pointer" class="text-dark ml-2" onclick="document.getElementById('moveCart').submit();"><u>Move to cart</u></a>
                                        </form>
                                    </div>
                                </div>
                                <div class="card-body mt-4 mr-4">
                                    <h5><strong>${{ $item->price }}</strong></h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@else
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header mt-3 bg-white">
                <h3 class="font-weight-bold">Saved for later</h3>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card-body w-100 ml-3 mt-3" style="padding:0;">
                <div class="row" style="margin-right:0px">
                    <div class="card-title">
                        <h5 class="text-muted">You have no items saved for later!</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection