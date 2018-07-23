@extends('layouts.app')

@section('title')
    Lists
@endsection

@section('content')
<div class="row">
    <div class="col-md-3">
        <div class="card offset-md-2">
            <div class="card-body bg-white pt-1 pb-1 border-bottom">
                <h5>Welcome {{ Auth::user()->first_name }}</h5>
                <a href="{{ route('user.profile') }}">Visit your profile</a>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header bg-white pt-3" style="border:hidden">
                <h3>Your lists</h3>
                <hr>
            </div>
        </div>
        <ul class="nav nav-pills ml-4 border-bottom pb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Wish list</a>
            </li>
        </ul>
        <div class="tab-content ml-3" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="card-body products">
                    <div class="row">
                        @forelse($products as $product)
                        <div class="card border-bottom ">
                            <div class="card-images w-100 pl-3 d-inline-flex pb-2">
                                <div class="card mr-4" style="width:200px">
                                    <img class="card-img-top img-fluid" style="padding:10px" src="{{ $product->imageUrl }}" alt="Card image cap"></a>
                                </div>
                                <div class="card-body mt-4">
                                    <a href="{{ route('welcome.show', ['product' => $product->product_id]) }}" class="font-weight-bold text-muted">{{ $product->title }}</a>
                                    <p class="pt-3"><strong>${{ $product->price }}</strong></p>
                                    <a target="_blank" href="{{ route('create.review', ['product' => $product->product_id]) }}" class="text-primary">Add a review</a>
                                </div>
                                <div class="card-body mt-4 pl-4">
                                    <form method="POST" action="{{ route('user.addCart') }}">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="qty" id="qty" value="1">
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <button style="border-radius:20px; width:100px" class="btn btn-primary mb-4">Add to <i class="fas fa-shopping-cart"></i></button> 
                                    </form>
                                    <form method="POST" action="{{ route('user.deleteWishlist') }}">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="wishlist_id" value="{{ $product->id }}">
                                        <button type="submit" style="border-radius:20px; width:100px" class="btn btn-warning text-dark">Remove <i class="fas fa-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-primary text-center border rounded pt-4 pb-5" style="background-color:#9bc2e6">
                                    <h5 class="mt-2 mb-3">Add products to your wishlist.</h5>
                                    <p class="text-dark font-weight-bold">Visit any product and click on the <button class="btn btn-primary" style="border-radius:20px">Add to <i class="fas fa-heart"></i></button></p>
                                    <p class="text-dark font-weight-bold">You could create your own list of your favorite products and save it for later.</p>
                                    <a href="{{ route('welcome.index') }}">Try it now. Go on shopping.</a>
                                </div>
                            </div>
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>   
</div>
@endsection

