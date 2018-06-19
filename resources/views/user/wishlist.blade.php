@extends('layouts.app')

@section('title')
    Wishlist
@endsection

@section('content')
<div class="row">
    <div class="col-md-3">
        <div class="card content-left">
            <div class="card-header bg-white pr-0" style="border:hidden">
                <h3 style="font-weight:bold" class="pt-2">Welcome {{ Auth::user()->first_name }}</h3>
                <p><a href="{{ route('user.profile') }}">Visit account</a></p>
                <hr>
                <h6 class="font-weight-bold text-secondary mb-0">Your lists</h6>
            </div>
            <div class="list-items pr-0" style="border-bottom: 1px solid rgba(0,0,0,.125)">
                <ul class="list-group-flush" style=" list-style-type: none;">
                    <li class="list-item mb-2"><a href="{{ route('user.profile') }}">Your wishlist</a></li>
                    <li class="list-item mb-2"><a href="{{ route('user.account') }}">Save for later</a></li>
                </ul>
            </div>  
        </div>
    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header bg-white pt-3" style="border:hidden">
                <h3>Your wishlist</h3>
            </div>
        </div>
        <div class="card-body products">
            <div class="row">
            @forelse($products as $product)
            <div class="card mr-5" style="width: 18rem">
                <div class="top">
                    <form class="float-right mt-1" method="post" action="{{ route('user.deleteWishlist') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="wishlist_id" value="{{ $product->id }}">
                        <button class="text-dark" style="cursor:pointer; border:hidden;" type="submit"><i class="fas fa-times"></i></button>
                    </form> 
                    <span><i class="fas fa-heart text-danger mt-2 ml-3" style="font-size:25px"></i></span>
                    <a href="{{ route('welcome.show', ['product' => $product->id]) }}">
                        <img class="card-img-top img-fluid" src="{{ $product->imageUrl }}" alt="Card image cap">
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">{{ $product->title}}</h5>
                    <h2 class="card-text text-center">${{ $product->price }}</h2>
                </div>
            </div>
            @empty
                <h6>There's no products</h6>
            @endforelse
            </div>
        </div>
    </div>   
</div>
@endsection

