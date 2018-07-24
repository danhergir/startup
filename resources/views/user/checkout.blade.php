@extends('layouts.check')

@section('title')
Checkout
@endsection 

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 navbar navbar-expand-lg navbar-light bg-primary " style="height:60px">
            <div class="container">
                <div class="col-md-4">
                    <span><a class="navbar-brand" href="{{ route('welcome.index') }}">Brand</a></span>
                </div>
                <div class="col-md-4">
                    <h4 class="text-center" style="color:#dfebe6">Checkout</h4>
                </div>
                <div class="col-md-4">
                    <a class="navbar-brand float-right" href="{{ route('user.cart') }}">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@forelse($addresses as $address)
<div class="container">
    <div class="row">
        <div class="col-md-8 border" style="margin-top:60px">
            <div class="col-md-10">
                <div class="card-title mt-4">
                    <h4 class="font-weight-bold">Billing address</h4>
                </div>
                <form class="mt-4 mb-4 ml-4 checked-form">
                    <div class="row">
                        <div class="col">
                            <label for=""><h6>First name <span class="text-danger">*</span></h6></label>
                            <input type="text" class="form-control checked" value="{{ $address->first_name }}" id="first_name">
                        </div>
                        <div class="col">
                            <label for=""><h6>Last name <span class="text-danger">*</span></h6></label>
                            <input type="text" class="form-control checked" value="{{ $address->last_name }}" id="last_name">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <label for=""><h6>Street Address <span class="text-danger">*</span></h6></label>
                            <input type="text" class="form-control checked" value="{{ $address->street_address }}" id="street_address">
                        </div>
                        <div class="col">
                            <label for=""><h6>Street Address 2</h6></label>
                            <input type="text" class="form-control checked" value="{{ $address->street_address2 }}" id="street_address2">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <label for=""><h6>Country <span class="text-danger">*</span></h6></label>
                            <input type="text" class="form-control checked" value="{{ $address->country }}" id="country">
                        </div>
                        <div class="col">
                            <label for=""><h6>City <span class="text-danger">*</span></h6></label>
                            <input type="text" class="form-control checked" value="{{ $address->city }}" id="city">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <label for=""><h6>State/Province <span class="text-danger">*</span></h6></label>
                            <input type="text" class="form-control checked" value="{{ $address->state_province }}" id="state_province">
                        </div>
                        <div class="col">
                            <label for=""><h6>Phone <span class="text-danger">*</span></h6></label>
                            <input type="text" class="form-control checked" value="{{ $address->phone_number }}" id="phone">
                        </div>
                    </div>
                </form>                  
            </div>
        </div>
        <div class="col-md-4 border rounded fl-checkout">
            <div class="card-body w-100 ml-3 mt-3" style="padding:0;">
                <div class="row" style="margin-right:0px">
                    <div class="card-checkout d-inline-flex w-100">
                        <div class="card mt-4 mr-4">
                            <h6>Subtotal ({{ $cart->totalQty}} items)</h6>
                            <h6>Shipping</h6>
                        </div>
                        <div class="card mt-4 ml-4">
                            <h6>${{ $cart->totalPrice}}</h6>
                            <h6>Free</h6>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="card-body" style="padding:0;">
                        <hr class="mr-4">
                        <div class="d-inline-flex w-100">
                            <h4 class="mr-5">Est. total</h4>
                            <h4 class="font-weight-bold ml-5">${{ $cart->totalPrice}}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@empty
<div class="container">
    <div class="row">
        <div class="col-md-8 border" style="margin-top:60px">
            <div class="col-md-10">
                <div class="card-title mt-4">
                    <h4 class="font-weight-bold">Billing address</h4>
                </div>
                <form class="mt-4 mb-4 ml-4 checked-form">
                    <div class="row">
                        <div class="col">
                            <label for=""><h6>First name <span class="text-danger">*</span></h6></label>
                            <input type="text" class="form-control checked" id="first_name">
                        </div>
                        <div class="col">
                            <label for=""><h6>Last name <span class="text-danger">*</span></h6></label>
                            <input type="text" class="form-control checked" id="last_name">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <label for=""><h6>Street Address <span class="text-danger">*</span></h6></label>
                            <input type="text" class="form-control checked" id="street_address">
                        </div>
                        <div class="col">
                            <label for=""><h6>Street Address 2</h6></label>
                            <input type="text" class="form-control checked" id="street_address2">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <label for=""><h6>Country <span class="text-danger">*</span></h6></label>
                            <input type="text" class="form-control checked" id="country">
                        </div>
                        <div class="col">
                            <label for=""><h6>City <span class="text-danger">*</span></h6></label>
                            <input type="text" class="form-control checked" id="city">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <label for=""><h6>State/Province <span class="text-danger">*</span></h6></label>
                            <input type="text" class="form-control checked" id="state_province">
                        </div>
                        <div class="col">
                            <label for=""><h6>Phone <span class="text-danger">*</span></h6></label>
                            <input type="text" class="form-control checked" id="phone">
                        </div>
                    </div>
                </form>                  
            </div>
        </div>
        <div class="col-md-4 border rounded fl-checkout">
            <div class="card-body w-100 ml-3 mt-3" style="padding:0;">
                <div class="row" style="margin-right:0px">
                    <div class="card-checkout d-inline-flex w-100">
                        <div class="card mt-4 mr-4">
                            <h6>Subtotal (0 items)</h6>
                            <h6>Shipping</h6>
                        </div>
                        <div class="card mt-4 ml-4">
                            <h6>$0.00</h6>
                            <h6>Free</h6>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="card-body" style="padding:0;">
                        <hr class="mr-4">
                        <div class="d-inline-flex w-100">
                            <h4 class="mr-5">Est. total</h4>
                            <h4 class="font-weight-bold ml-5">$0.00</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforelse

<div class="container">
    <div class="row">
        <div class="col-md-8 border" style="margin-top:60px">
            <div class="col-md-10">
                <div class="card-title mt-4">
                    <h4 class="font-weight-bold">Shipping address</h4>
                    <label for="address-shipping"> 
                        @if(count($addresses) > 0)
                        <input class="mr-1 mt-3" type="checkbox" name="checkbox" id="checkbox" checked>
                        Billing address is the same for shipping address
                        @else
                        <input class="mr-1 mt-3" type="checkbox" name="checkbox" id="checkbox">
                        Billing address is the same for shipping address 
                        @endif
                    </label>
                </div>
                <form class="mt-4 mb-4 ml-4 checked-form">
                    <div class="row">
                        <div class="col">
                            <label for=""><h6>First name <span class="text-danger">*</span></h6></label>
                            <input type="text" class="form-control check" id="check_first_name">
                        </div>
                        <div class="col">
                            <label for=""><h6>Last name <span class="text-danger">*</span></h6></label>
                            <input type="text" class="form-control check" id="check_last_name">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <label for=""><h6>Street Address <span class="text-danger">*</span></h6></label>
                            <input type="text" class="form-control check" id="check_street_address">
                        </div>
                        <div class="col">
                            <label for=""><h6>Street Address 2</h6></label>
                            <input type="text" class="form-control check" id="check_street_address2">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <label for=""><h6>Country <span class="text-danger">*</span></h6></label>
                            <input type="text" class="form-control check" id="check_country">
                        </div>
                        <div class="col">
                            <label for=""><h6>City <span class="text-danger">*</span></h6></label>
                            <input type="text" class="form-control check" id="check_city">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <label for=""><h6>State/Province <span class="text-danger">*</span></h6></label>
                            <input type="text" class="form-control check" id="check_state_province">
                        </div>
                        <div class="col">
                            <label for=""><h6>Phone <span class="text-danger">*</span></h6></label>
                            <input type="text" class="form-control check" id="check_phone">
                        </div>
                    </div>
                </form>                  
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-8 border" style="margin-top:60px">
            <div class="col-md-10">
                <div class="card-title mt-4">
                    <h4 class="font-weight-bold">Payment</h4>
                </div>
                <div class="pay-info">
                    <h5>Complete your payment. Choose a cryptocurrency:</h5>
                </div>
                <div class="cryptocurrencies mt-3 mb-4">
                    <span><i class="fab fa-bitcoin text-warning mr-2" style="font-size:25px"></i></span>
                    <span><i class="fab fa-ethereum text-primary ml-2" style="font-size:25px;"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 border" style="margin-top:60px;">
            <div class="col-md-10">
                <div class="card-title mt-4">
                    <h4 class="font-weight-bold">Review your order</h4>
                </div>
                @foreach($articles as $article)
                <div class="card-body w-100 ml-3" style="padding:0;">
                    <div class="row" style="margin-right:0px">
                        <div class="card" style="border-radius:0px">
                            <div class="card-images d-inline-flex" style="width:745px">
                                <div class="card mr-4" style="width:200px">
                                    <img class="card-img-top img-fluid" style="padding:10px" src="{{ $article['item']->imageUrl }}" alt="Card image cap"></a>
                                </div>
                                <div class="card-body mt-4">
                                    <div class="item-title">
                                        <a href="{{ route('welcome.show', ['product' => $article['item']->id ]) }}" class="text-dark"><h5>{{ $article['item']->title }}</h5></a>
                                    </div>
                                    <div class="product-quantity">
                                        <h5 class="mt-3">Qty: {{ $article['qty'] }}</h5>
                                    </div>
                                </div>
                                <div class="card-body mt-4 mr-4">
                                    <h5><strong>${{ $article['item']->price * $article['qty']}}</strong></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/mean.js') }}"></script>
@endsection


