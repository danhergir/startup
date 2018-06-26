@extends('layouts.app')

@section('title')
    User Cart
@endsection

@section('content')
@if(Session::has('cart'))
<div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <ul class="list-group">
                @foreach($products as $product)
                <li class="list-group-item">
                    <span style="float: right" class="badge badge-secondary">{{ $product['qty'] }}</span>
                    <strong>{{ $product['item']['title'] }}</strong>
                    <h6><span class="badge badge-success">${{ $product['price'] }}</span></h6>
                    <div class="dropdown show">
                        <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Action
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Reduce By 1</a>
                            <a class="dropdown-item" href="#">Remove All</a>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">           
        <strong>Total: ${{ $totalPrice }}</strong>
        </div> 
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">           
        <a class="btn btn-success" role="button">Checkout</a>
        </div> 
        </div>
@else   
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">           
        <h2>No Items In Cart!</h2>
        </div> 
    </div>

@endif
@endsection