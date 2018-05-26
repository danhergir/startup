@extends('layouts.app')

@section('title')
Brand
@endsection

@section('content')
<div class="row">
    <div class="col-md-6 product-img mt-3">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block mx-auto" src="{{ $product->imageUrl }}" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block mx-auto" src="{{ $product->image1 }}" alt="Second slide">
                </div>
            </div>
            <div class="text-center pt-2">
                <img style="cursor: pointer" data-target="#carouselExampleIndicators" data-slide-to="0" class="active img-thumbnail product-image" src="{{ $product->imageUrl }}" alt="">
                <img style="cursor: pointer" data-target="#carouselExampleIndicators" data-slide-to="1" class="img-thumbnail product-image" src="{{ $product->image1 }}" alt="">
            </div>
        </div>
    </div>
    <div class="col-md-5 product-info product mt-5 mb-2">
        <h2 class="pt-2">{{ $product->title }}</h2>
        <h6 class="pt-2">Stars - Numbers of reviews | Microsoft</h6>
        <h1 style="font-weight:bold; font-size:30px" class="pt-2">${{ $product->price }}</h1>
        <h6 style="font-weight:bold" class="pt-2">Free 2-day shipping </h6>
        <hr>
        <div class="product-sell product">
            <h6 class="text-muted">Qty :</h6>
            <select name="quantity" id="qty" class="mr-2">
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
            <button class="rounded btn btn-primary" type="submit" form="NoForm" value="Submit">Add to <i class="fas fa-shopping-cart"></i></button>
        </div>
        <hr>
        <div class="product-shipping">
            <h5 style="font-size:17px; font-weight:bold"><i class="fas fa-paper-plane mr-2"></i>Sale & shipping by Some-Brand</h5>
        </div>
        <hr>
        <div class="wish-list">
            <h6 style="font-weight:bold">Save it too...</h6><button class="rounded btn btn-primary" type="submit" form="NoForm" value="Submit">Add to <i class="fas fa-heart"></i></button>
        </div>
        <hr>
        <div class="form error-form">
            <h6 class="" style="font-weight:bold">Contact us</h6>
            <a class="text-dark" href=""><i class="fas fa-comment mr-2"></i>Let us know if something went wrong</a>
        </div>
    </div>
</div>
<hr class="mt-5">
<div class="text-center pt-5">
    <div class="container">
        <h3 class="text-left">Other customers looked for</h3>
    </div>
    <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
        <div class="carousel-inner w-100" role="listbox">
            <div class="carousel-item row no-gutters active offset-md-1">
                <div class="card col-3 float-left mr-5" style="width: 200px;"><a href="{{ route('welcome.show', ['product' => $product]) }}"><img class="card-img-top img-fluid" src="{{ $product->imageUrl }}" alt="Card image cap"></a><div class="card-body"><h5 class="card-title">{{ $product->title}}</h5><h2 class="card-text">${{ $product->price }}</h2></div></div>
                <div class="card col-3 float-left mr-5" style="width: 200px;"><a href="{{ route('welcome.show', ['product' => $product]) }}"><img class="card-img-top img-fluid" src="{{ $product->imageUrl }}" alt="Card image cap"></a><div class="card-body"><h5 class="card-title">{{ $product->title}}</h5><h2 class="card-text">${{ $product->price }}</h2></div></div>
                <div class="card col-3 float-left mr-5" style="width: 200px;"><a href="{{ route('welcome.show', ['product' => $product]) }}"><img class="card-img-top img-fluid" src="{{ $product->imageUrl }}" alt="Card image cap"></a><div class="card-body"><h5 class="card-title">{{ $product->title}}</h5><h2 class="card-text">${{ $product->price }}</h2></div></div>
                <div class="card col-3 float-left mr-5" style="width: 200px;"><a href="{{ route('welcome.show', ['product' => $product]) }}"><img class="card-img-top img-fluid" src="{{ $product->imageUrl }}" alt="Card image cap"></a><div class="card-body"><h5 class="card-title">{{ $product->title}}</h5><h2 class="card-text">${{ $product->price }}</h2></div></div>
                <div class="card col-3 float-left mr-5" style="width: 200px;"><a href="{{ route('welcome.show', ['product' => $product]) }}"><img class="card-img-top img-fluid" src="{{ $product->imageUrl }}" alt="Card image cap"></a><div class="card-body"><h5 class="card-title">{{ $product->title}}</h5><h2 class="card-text">${{ $product->price }}</h2></div></div>
            </div>
            <div class="carousel-item row no-gutters offset-md-1">
                <div class="card col-3 float-left mr-5" style="width: 200px;"><a href="{{ route('welcome.show', ['product' => $product]) }}"><img class="card-img-top img-fluid" src="{{ $product->imageUrl }}" alt="Card image cap"></a><div class="card-body"><h5 class="card-title">{{ $product->title}}</h5><h2 class="card-text">${{ $product->price }}</h2></div></div>
                <div class="card col-3 float-left mr-5" style="width: 200px;"><a href="{{ route('welcome.show', ['product' => $product]) }}"><img class="card-img-top img-fluid" src="{{ $product->imageUrl }}" alt="Card image cap"></a><div class="card-body"><h5 class="card-title">{{ $product->title}}</h5><h2 class="card-text">${{ $product->price }}</h2></div></div>
                <div class="card col-3 float-left mr-5" style="width: 200px;"><a href="{{ route('welcome.show', ['product' => $product]) }}"><img class="card-img-top img-fluid" src="{{ $product->imageUrl }}" alt="Card image cap"></a><div class="card-body"><h5 class="card-title">{{ $product->title}}</h5><h2 class="card-text">${{ $product->price }}</h2></div></div>
                <div class="card col-3 float-left mr-5" style="width: 200px;"><a href="{{ route('welcome.show', ['product' => $product]) }}"><img class="card-img-top img-fluid" src="{{ $product->imageUrl }}" alt="Card image cap"></a><div class="card-body"><h5 class="card-title">{{ $product->title}}</h5><h2 class="card-text">${{ $product->price }}</h2></div></div>
                <div class="card col-3 float-left mr-5" style="width: 200px;"><a href="{{ route('welcome.show', ['product' => $product]) }}"><img class="card-img-top img-fluid" src="{{ $product->imageUrl }}" alt="Card image cap"></a><div class="card-body"><h5 class="card-title">{{ $product->title}}</h5><h2 class="card-text">${{ $product->price }}</h2></div></div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<hr>
<div class="pt-5">
    <div class="container">
        <h3>Product description</h3>
    </div>
    <div class="container">
        <h6 class="text-left" style="font-size:20px">{{ $product->description }}</h6>
    </div>
</div>
<hr class="mt-5">
<div class="text-center pt-5">
    <div class="container">
        <h3 class="text-left">Other customers bought</h3>
    </div>
    <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
        <div class="carousel-inner w-100" role="listbox">
            <div class="carousel-item row no-gutters active offset-md-1">
                <div class="card col-3 float-left mr-5" style="width: 200px;"><a href="{{ route('welcome.show', ['product' => $product]) }}"><img class="card-img-top img-fluid" src="{{ $product->imageUrl }}" alt="Card image cap"></a><div class="card-body"><h5 class="card-title">{{ $product->title}}</h5><h2 class="card-text">${{ $product->price }}</h2></div></div>
                <div class="card col-3 float-left mr-5" style="width: 200px;"><a href="{{ route('welcome.show', ['product' => $product]) }}"><img class="card-img-top img-fluid" src="{{ $product->imageUrl }}" alt="Card image cap"></a><div class="card-body"><h5 class="card-title">{{ $product->title}}</h5><h2 class="card-text">${{ $product->price }}</h2></div></div>
                <div class="card col-3 float-left mr-5" style="width: 200px;"><a href="{{ route('welcome.show', ['product' => $product]) }}"><img class="card-img-top img-fluid" src="{{ $product->imageUrl }}" alt="Card image cap"></a><div class="card-body"><h5 class="card-title">{{ $product->title}}</h5><h2 class="card-text">${{ $product->price }}</h2></div></div>
                <div class="card col-3 float-left mr-5" style="width: 200px;"><a href="{{ route('welcome.show', ['product' => $product]) }}"><img class="card-img-top img-fluid" src="{{ $product->imageUrl }}" alt="Card image cap"></a><div class="card-body"><h5 class="card-title">{{ $product->title}}</h5><h2 class="card-text">${{ $product->price }}</h2></div></div>
                <div class="card col-3 float-left mr-5" style="width: 200px;"><a href="{{ route('welcome.show', ['product' => $product]) }}"><img class="card-img-top img-fluid" src="{{ $product->imageUrl }}" alt="Card image cap"></a><div class="card-body"><h5 class="card-title">{{ $product->title}}</h5><h2 class="card-text">${{ $product->price }}</h2></div></div>
            </div>
        </div>
    </div>
</div>
<hr class="mt-5">
<div class="container">
    <div class="comments">
        <h3>Reviews and comments</h3>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            Number of stars 
        </div>
        <div class="col-md-4 text-center">
            Rating - statistics
        </div>
        <div class="col-md-4">
            @if(auth()->check())
                <div class="create-review text-right">
                    <a href="{{ route('create.review', [$product] ) }}" class="btn btn-primary" role="button" style="border-radius:20px">Write a review</a>
                </div>
            @else
                <div class="write-review text-right">
                    <a href="/login" class="btn btn-primary" role="button" style="border-radius:20px">Write a review</a>
                </div>
            @endif
        </div>
    </div>
</div>
<hr>
<div class="container">
    <div class="row">
        <div class="col-md-6">
        <h3>Recent comments</h3>
            @forelse($product->reviews as $review)
            <div class="comment mt-5 border border-dark pl-3 pt-3 pb-3 mb-3 rounded">
                <div class="title">
                    <h4>{{ $review->headline }}</h4>
                </div>
                <div class="body-text pt-3 pr-5">
                    <p style="text-align:justify"><strong>{{ $review->description }}</strong></p>
                </div>
                <div class="author pt-2">
                    <h6 class="text-muted">{{ $review->user_name }},  {{ date('d-m-Y', strtotime( $review->created_at )) }}</h6>
                </div>
                <div class="votes row">

                </div>
            </div>
            @empty
            <h6>There are not reviews for this product</h6>
            @endforelse
        </div>
    </div>
</div>
@endsection


