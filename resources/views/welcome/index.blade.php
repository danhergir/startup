@extends('layouts.app')

@section('title')
    Brand
@endsection

@section('content')
@foreach($products as $product)
<div id="carouselExampleIndicators" class="d-block pt-5 carousel slide w-100" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
            <img class="d-block img-fluid img-carousel" src="https://i5.walmartimages.com/dfw/4ff9c6c9-7e85/k2-_bfb3ca17-50f2-4eaa-9131-f32df789bdaa.v1.jpg?odnWidth=1364&odnHeight=300&odnBg=ffffff" alt="First slide">
            </div>
            <div class="carousel-item">
            <img class="d-block img-fluid img-carousel" src="https://ll-us-i5.wal.co/dfw/4ff9c6c9-37b0/k2-_2fb17df4-7349-44f0-b978-b4a9baa6d1fb.v1.jpg?odnWidth=1364&odnHeight=300&odnBg=ffffff" alt="Second slide">
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

<section class="container pt-3 text-center">
        <div class="row">
            <div class="col-lg-12">
                <h3>Look at this new products</h3>
            </div>
        </div>
    </section>
    <section class="carousel slide" data-ride="carousel" id="postsCarousel">
        <div class="container">
            <div class="row">
                <div class="col-12 text-md-right lead">
                    <a class="btn btn-secondary-outline prev" href="" title="go back"><i class="fa fa-lg fa-chevron-left"></i></a>
                    <a class="btn btn-secondary-outline next" href="" title="more"><i class="fa fa-lg fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
        <div class="container pt-0 mt-2 text-center">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="card-deck">
                    <div class="card">
                        <div class="card-img-top card-img-top-250">
                            <img class="img-fluid rounded" src="{{$product->imageUrl}}" alt="Carousel 1">
                            <div class="card-body pt-2">
                                <h5>${{$product->price}}</h5>
                            </div>
                        </div>
                        <div class="card-body pt-2">
                            <p><a href="#" class="btn btn-warning" role="button">Add to <i class="fas fa-shopping-cart"></i></a></p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-img-top card-img-top-250">
                            <img class="img-fluid rounded" src="{{$product->imageUrl}}" alt="Carousel 1">
                            <div class="card-body pt-2">
                                <h5>${{$product->price}}</h5>
                            </div>
                        </div>
                        <div class="card-body pt-2">
                            <p><a href="#" class="btn btn-warning" role="button">Add to <i class="fas fa-shopping-cart"></i></a></p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-img-top card-img-top-250">
                            <img class="img-fluid rounded" src="{{$product->imageUrl}}" alt="Carousel 1">
                            <div class="card-body pt-2">
                                <h5>${{$product->price}}</h5>
                            </div>
                        </div>
                        <div class="card-body pt-2">
                            <p><a href="#" class="btn btn-warning" role="button">Add to <i class="fas fa-shopping-cart"></i></a></p>           
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-img-top card-img-top-250">
                            <img class="img-fluid rounded" src="{{$product->imageUrl}}" alt="Carousel 1">
                            <div class="card-body pt-2">
                                <h5>${{$product->price}}</h5>
                            </div>
                        </div>
                        <div class="card-body pt-2">
                            <p><a href="#" class="btn btn-warning" role="button">Add to <i class="fas fa-shopping-cart"></i></a></p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-img-top card-img-top-250">
                            <img class="img-fluid rounded" src="{{$product->imageUrl}}" alt="Carousel 1">
                            <div class="card-body pt-2">
                                <h5>${{$product->price}}</h5>
                            </div>
                        </div>
                        <div class="card-body pt-2">
                            <p><a href="#" class="btn btn-warning" role="button">Add to <i class="fas fa-shopping-cart"></i></a></p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-img-top card-img-top-250">
                            <img class="img-fluid rounded" src="{{$product->imageUrl}}" alt="Carousel 1">
                            <div class="card-body pt-2">
                                <h5>${{$product->price}}</h5>
                            </div>
                        </div>
                        <div class="card-body pt-2">
                            <p><a href="#" class="btn btn-warning" role="button">Add to <i class="fas fa-shopping-cart"></i></a></p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-img-top card-img-top-250">
                            <img class="img-fluid rounded" src="{{$product->imageUrl}}" alt="Carousel 1">
                            <div class="card-body pt-2">
                                <h5>${{$product->price}}</h5>
                            </div>
                        </div>
                        <div class="card-body pt-2">
                            <p><a href="#" class="btn btn-warning" role="button">Add to <i class="fas fa-shopping-cart"></i></a></p>
                        </div>
                    </div>

                </div>
                </div>
                <div class="carousel-item">
                    <div class="card-deck">
                    <div class="card">
                        <div class="card-img-top card-img-top-250">
                            <img class="img-fluid rounded" src="{{$product->imageUrl}}" alt="Carousel 1">
                            <div class="card-body pt-2">
                                <h5>${{$product->price}}</h5>
                            </div>
                        </div>
                        <div class="card-body pt-2">
                            <p><a href="#" class="btn btn-warning" role="button">Add to <i class="fas fa-shopping-cart"></i></a></p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-img-top card-img-top-250">
                            <img class="img-fluid rounded" src="{{$product->imageUrl}}" alt="Carousel 1">
                            <div class="card-body pt-2">
                                <h5>${{$product->price}}</h5>
                            </div>
                        </div>
                        <div class="card-body pt-2">
                            <p><a href="#" class="btn btn-warning" role="button">Add to <i class="fas fa-shopping-cart"></i></a></p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-img-top card-img-top-250">
                            <img class="img-fluid rounded" src="{{$product->imageUrl}}" alt="Carousel 1">
                            <div class="card-body pt-2">
                                <h5>${{$product->price}}</h5>
                            </div>
                        </div>
                        <div class="card-body pt-2">
                            <p><a href="#" class="btn btn-warning" role="button">Add to <i class="fas fa-shopping-cart"></i></a></p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-img-top card-img-top-250">
                            <img class="img-fluid rounded" src="{{$product->imageUrl}}" alt="Carousel 1">
                            <div class="card-body pt-2">
                                <h5>${{$product->price}}</h5>
                            </div>
                        </div>
                        <div class="card-body pt-2">
                            <p><a href="#" class="btn btn-warning" role="button">Add to <i class="fas fa-shopping-cart"></i></a></p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-img-top card-img-top-250">
                            <img class="img-fluid rounded" src="{{$product->imageUrl}}" alt="Carousel 1">
                            <div class="card-body pt-2">
                                <h5>${{$product->price}}</h5>
                            </div>
                        </div>
                        <div class="card-body pt-2">
                            <p><a href="#" class="btn btn-warning" role="button">Add to <i class="fas fa-shopping-cart"></i></a></p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-img-top card-img-top-250">
                            <img class="img-fluid rounded" src="{{$product->imageUrl}}" alt="Carousel 1">
                            <div class="card-body pt-2">
                                <h5>${{$product->price}}</h5>
                            </div>
                        </div>
                        <div class="card-body pt-2">
                            <p><a href="#" class="btn btn-warning" role="button">Add to <i class="fas fa-shopping-cart"></i></a></p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-img-top card-img-top-250">
                            <img class="img-fluid rounded" src="{{$product->imageUrl}}" alt="Carousel 1">
                            <div class="card-body pt-2">
                                <h5>${{$product->price}}</h5>
                            </div>
                        </div>
                        <div class="card-body pt-2">
                            <p><a href="#" class="btn btn-warning" role="button">Add to <i class="fas fa-shopping-cart"></i></a></p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endforeach
@endsection
@section('scripts')
<script type="text/javascript" src="{{ URL::to('src/js/app.js') }}"></script>
@endsection