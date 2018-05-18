@extends('layouts.app')

@section('title')
    Brand
@endsection

@section('content')
<div class="row">
    <div class="col-md-12 mb-5">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100" style="height:500px; width:1300px" src="https://i5.walmartimages.com/dfw/4ff9c6c9-dae3/k2-_c12f9660-a608-4622-8ddc-81cbc75e7e99.v1.jpg?odnWidth=1360&odnHeight=600&odnBg=ffffff" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" style="height:500px; width:1300px" src="https://i5.walmartimages.com/dfw/4ff9c6c9-b641/k2-_b438ec77-681b-441e-ac84-a259f42bc578.v1.jpg?odnWidth=1360&odnHeight=600&odnBg=ffffff" alt="Second slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>

<div class="container pt-3 pb-5">
    <div class="row">
        <div class="col-md-4 text-center">
            <span class="text-primary"><i style="font-size:30px" class="fas fa-truck"></i></span>
            <h4>Free 2-Day Shipping.</h4>
            <p>Buy now. No need memberships.</p>
            <a href="#">Go on shopping.</a>
        </div>
        <div class="col-md-4 text-center">
            <span class="text-primary"><i style="font-size:30px" class="fas fa-shopping-bag"></i></span>
            <h4>Launch your own products.</h4>
            <p>Sell and receive cryptocurrencies</p>
            <a href="{{ route('register') }}">Create an account</a>
        </div>
        <div class="col-md-4 text-center">
            <span class="text-primary"><i style="font-size:30px" class="fab fa-bitcoin"></i></span><span class="text-primary ml-3"><i style="font-size:30px" class="fab fa-ethereum"></i></span>
            <h4>Use cryptocurrencies</h4>
            <p>Buy and sell with cryptocurrencies</p>
            <a href="#">Go on shopping</a>
        </div>
    </div>
</div>


<div class="container pt-5 text-center">
    <h3 class="pb-2">Explore categories</h3>
    <div class="row">        
        <div class="col-md-4">
            <img class="img-fluid" src="https://d3lfzbr90tctqz.cloudfront.net/epi/resource/r/smart-tv-samsung-50-4k-ultra-hd-un50mu6100gcdf/1bbeb7ac9794c8bd159b776cef7ace7e7fe13dd8a68747d7cb8f23efbc643338_500" alt="">
            <h6>Electronics</h6>
        </div>
        <div class="col-md-4">
            <img class="img-fluid" src="https://d3lfzbr90tctqz.cloudfront.net/epi/resource/r/smart-tv-samsung-50-4k-ultra-hd-un50mu6100gcdf/1bbeb7ac9794c8bd159b776cef7ace7e7fe13dd8a68747d7cb8f23efbc643338_500" alt="">
            <h6>Electronics</h6>
        </div>
        <div class="col-md-4">
            <img class="img-fluid" src="https://d3lfzbr90tctqz.cloudfront.net/epi/resource/r/smart-tv-samsung-50-4k-ultra-hd-un50mu6100gcdf/1bbeb7ac9794c8bd159b776cef7ace7e7fe13dd8a68747d7cb8f23efbc643338_500" alt="">
            <h6>Electronics</h6>
        </div>
    </div>
</div>
<div class="container text-center pb-5">
    <div class="row">        
        <div class="col-md-4">
            <img class="img-fluid" src="https://d3lfzbr90tctqz.cloudfront.net/epi/resource/r/smart-tv-samsung-50-4k-ultra-hd-un50mu6100gcdf/1bbeb7ac9794c8bd159b776cef7ace7e7fe13dd8a68747d7cb8f23efbc643338_500" alt="">
            <h6>Electronics</h6>
        </div>
        <div class="col-md-4">
            <img class="img-fluid" src="https://d3lfzbr90tctqz.cloudfront.net/epi/resource/r/smart-tv-samsung-50-4k-ultra-hd-un50mu6100gcdf/1bbeb7ac9794c8bd159b776cef7ace7e7fe13dd8a68747d7cb8f23efbc643338_500" alt="">
            <h6>Electronics</h6>
        </div>
        <div class="col-md-4">
            <img class="img-fluid" src="https://d3lfzbr90tctqz.cloudfront.net/epi/resource/r/smart-tv-samsung-50-4k-ultra-hd-un50mu6100gcdf/1bbeb7ac9794c8bd159b776cef7ace7e7fe13dd8a68747d7cb8f23efbc643338_500" alt="">
            <h6>Electronics</h6>
        </div>
    </div>
</div>


@foreach($products as $product)
<div class="container text-center my-3 pt-5">
    <h3 class="pb-4">Look at this new products</h3>
    <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
        <div class="carousel-inner w-100" role="listbox">
            <div class="carousel-item row no-gutters active offset-md-1">
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

<div class="container text-center my-3 pt-5">
    <h3 class="pb-4">We know you'll be interested in...</h3>
    <div class="carousel-item row no-gutters active offset-md-1">
        <div class="card col-3 float-left mr-5" style="width: 200px;"><a href="{{ route('welcome.show', ['product' => $product]) }}"><a href="{{ route('welcome.show', ['product' => $product]) }}"><img class="card-img-top img-fluid" src="{{ $product->imageUrl }}" alt="Card image cap"></a></a><div class="card-body"><h5 class="card-title">{{ $product->title}}</h5><h2 class="card-text">${{ $product->price }}</h2></div></div>
        <div class="card col-3 float-left mr-5" style="width: 200px;"><a href="{{ route('welcome.show', ['product' => $product]) }}"><img class="card-img-top img-fluid" src="{{ $product->imageUrl }}" alt="Card image cap"></a><div class="card-body"><h5 class="card-title">{{ $product->title}}</h5><h2 class="card-text">${{ $product->price }}</h2></div></div>
        <div class="card col-3 float-left mr-5" style="width: 200px;"><a href="{{ route('welcome.show', ['product' => $product]) }}"><img class="card-img-top img-fluid" src="{{ $product->imageUrl }}" alt="Card image cap"></a><div class="card-body"><h5 class="card-title">{{ $product->title}}</h5><h2 class="card-text">${{ $product->price }}</h2></div></div>
        <div class="card col-3 float-left mr-5" style="width: 200px;"><a href="{{ route('welcome.show', ['product' => $product]) }}"><img class="card-img-top img-fluid" src="{{ $product->imageUrl }}" alt="Card image cap"></a><div class="card-body"><h5 class="card-title">{{ $product->title}}</h5><h2 class="card-text">${{ $product->price }}</h2></div></div>
    </div>
</div>
@endforeach
@endsection
