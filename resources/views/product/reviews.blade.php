@extends('layouts.app')

@section('title')
Review
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="col-md-12 product-img">
                <div class="card">
                    <div class="card-image">
                        <div class="carousel-item active">
                        <img class="d-block mx-auto" src="{{ $product->imageUrl }}" alt="First slide">
                        </div>
                    </div>
                </div>
            </div>
            <h5 class="text-center">{{ $product->title }}</h5>
        </div>
        <div class="col-md-6" id="app">
            <review-form
            :user="{{Auth::user()}}"
            :product="{{$product}}"
            url="{{route('review.store')}}">
            </review-form>
        </div>
    </div>
</div>
@endsection

