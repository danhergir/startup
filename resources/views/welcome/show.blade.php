@extends('layouts.app')

@section('title')
Brand
@endsection

@section('content')
<div class="row">
    <div class="col-md-6 product-img">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block mx-auto" src="https://i5.walmartimages.com/asr/2f24a0b1-b1c2-4e6f-aee0-66143651b6e4_1.734c3efd52ff08d7a5fa7516b30fac68.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block mx-auto" src="https://i5.walmartimages.com/asr/d40ad991-47ef-4625-bddb-8ae53f94e5dc_1.0b6d00a772c621abd700691288988c6e.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF" alt="Second slide">
                </div>
            </div>
            <div class="text-center" style="cursor: pointer">
                <img data-target="#carouselExampleIndicators" data-slide-to="0" class="active img-thumbnail" src="https://i5.walmartimages.com/asr/2f24a0b1-b1c2-4e6f-aee0-66143651b6e4_1.734c3efd52ff08d7a5fa7516b30fac68.jpeg?odnHeight=180&odnWidth=180&odnBg=FFFFFF" alt="">
                <img data-target="#carouselExampleIndicators" data-slide-to="1" class="img-thumbnail" src="https://i5.walmartimages.com/asr/d40ad991-47ef-4625-bddb-8ae53f94e5dc_1.0b6d00a772c621abd700691288988c6e.jpeg?odnHeight=180&odnWidth=180&odnBg=FFFFFF" alt="">
            </div>
        </div>
    </div>
    <div class="col-md-5 product-info product">
        <h2 class="pt-2">{{ $product->title }}</h2>
        <h6 class="pt-2">Stars - Numbers of reviews | DELBOLSILLO</h6>
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
        <div class="other-sellers">
            <h3>Compare other prices</h3>
        </div>
    </div>
</div>
@endsection