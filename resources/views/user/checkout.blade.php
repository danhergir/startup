@extends('layouts.check')

@section('title')
Checkout
@endsection 

@section('content')
<div class="row">
    <div class="col-md-12 navbar navbar-expand-lg navbar-light bg-primary" style="height:60px">
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
                    <span class="badge badge-pill badge-warning count-notif">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
                    <span class="sr-only">(current)</span>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

