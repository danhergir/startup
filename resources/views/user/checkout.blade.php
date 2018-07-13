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
                <form class="mt-4 mb-4 ml-4 ">
                    <div class="row">
                        <div class="col">
                            <label for=""><h6>First name <span class="text-danger">*</span></h6></label>
                            <input type="text" class="form-control" value="{{ $address->first_name }}">
                        </div>
                        <div class="col">
                            <label for=""><h6>Last name <span class="text-danger">*</span></h6></label>
                            <input type="text" class="form-control" value="{{ $address->last_name }}">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <label for=""><h6>Street Address <span class="text-danger">*</span></h6></label>
                            <input type="text" class="form-control" value="{{ $address->street_address }}">
                        </div>
                        <div class="col">
                            <label for=""><h6>Street Address 2</h6></label>
                            <input type="text" class="form-control" value="{{ $address->street_address2 }}">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <label for=""><h6>Country <span class="text-danger">*</span></h6></label>
                            <input type="text" class="form-control" value="{{ $address->country }}">
                        </div>
                        <div class="col">
                            <label for=""><h6>City <span class="text-danger">*</span></h6></label>
                            <input type="text" class="form-control" value="{{ $address->city }}">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <label for=""><h6>State/Province <span class="text-danger">*</span></h6></label>
                            <input type="text" class="form-control" value="{{ $address->state_province }}">
                        </div>
                        <div class="col">
                            <label for=""><h6>Phone <span class="text-danger">*</span></h6></label>
                            <input type="text" class="form-control" value="{{ $address->phone_number }}">
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
@empty
<div class="container">
    <div class="row">
        <div class="col-md-8 border" style="margin-top:60px">
            <div class="col-md-10">
                <div class="card-title mt-4">
                    <h4 class="font-weight-bold">Billing address</h4>
                </div>
                <form class="mt-4 mb-4 ml-4 ">
                    <div class="row">
                        <div class="col">
                            <label for=""><h6>First name <span class="text-danger">*</span></h6></label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col">
                            <label for=""><h6>Last name <span class="text-danger">*</span></h6></label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <label for=""><h6>Street Address <span class="text-danger">*</span></h6></label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col">
                            <label for=""><h6>Street Address 2</h6></label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <label for=""><h6>Country <span class="text-danger">*</span></h6></label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col">
                            <label for=""><h6>City <span class="text-danger">*</span></h6></label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <label for=""><h6>State/Province <span class="text-danger">*</span></h6></label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col">
                            <label for=""><h6>Phone <span class="text-danger">*</span></h6></label>
                            <input type="text" class="form-control">
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

@foreach($addresses as $address)
<div class="container">
    <div class="row">
        <div class="col-md-8 border" style="margin-top:60px">
            <div class="col-md-10">
                <div class="card-title mt-4">
                    <h4 class="font-weight-bold">Shipping address</h4>
                    <label for="address-shipping">  
                        <input class="mr-1 mt-3" type="checkbox" name="checkbox" id="checkbox" checked>
                        Billing address is the same for shipping address
                    </label>
                </div>
                <form class="mt-4 mb-4 ml-4 ">
                    <div class="row">
                        <div class="col">
                            <label for=""><h6>First name <span class="text-danger">*</span></h6></label>
                            <input type="text" class="form-control check" value="{{ $address->first_name }}">
                        </div>
                        <div class="col">
                            <label for=""><h6>Last name <span class="text-danger">*</span></h6></label>
                            <input type="text" class="form-control check" value="{{ $address->last_name }}">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <label for=""><h6>Street Address <span class="text-danger">*</span></h6></label>
                            <input type="text" class="form-control check" value="{{ $address->street_address }}">
                        </div>
                        <div class="col">
                            <label for=""><h6>Street Address 2</h6></label>
                            <input type="text" class="form-control check" value="{{ $address->street_address2 }}">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <label for=""><h6>Country <span class="text-danger">*</span></h6></label>
                            <input type="text" class="form-control check" value="{{ $address->country }}">
                        </div>
                        <div class="col">
                            <label for=""><h6>City <span class="text-danger">*</span></h6></label>
                            <input type="text" class="form-control check" value="{{ $address->city }}">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <label for=""><h6>State/Province <span class="text-danger">*</span></h6></label>
                            <input type="text" class="form-control check" value="{{ $address->state_province }}">
                        </div>
                        <div class="col">
                            <label for=""><h6>Phone <span class="text-danger">*</span></h6></label>
                            <input type="text" class="form-control check" value="{{ $address->phone_number }}">
                        </div>
                    </div>
                </form>             
            </div>
        </div>
    </div>
</div>
@endforeach


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
        <div class="col-md-8 border" style="margin-top:60px">
            <div class="col-md-10">
                <div class="card-title mt-4">
                    <h4 class="font-weight-bold">Review your order</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/mean.js') }}"></script>
@endsection


