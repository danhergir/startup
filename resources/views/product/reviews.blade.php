@extends('layouts.app')

@section('title')
Review create
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
        <div class="col-md-6">
            <form method="post" action="{{ route('review.store') }}">
                {{ csrf_field() }}
                <h5 class="text-center mt-4">Stars rating</h5> 
                <div class="form-group">
                    <label for="headline"><strong>Rating</strong></label>
                    <input type="text" class="form-control" name="rating" id="rating" placeholder="A number from 1 - 5">
                </div>
                <div class="form-group">
                    <label for="headline"><strong>Review title</strong></label>
                    <input type="text" class="form-control" name="headline" id="headline" placeholder="Add a title for your review">
                </div>
                <div class="form-group">
                    <label for="headline"><strong>Description</strong></label>
                    <input type="text" class="form-control" name="description" id="description" placeholder="Tell us about your experience with this product">
                </div>
                
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <input type="hidden" name="user_name" value="{{ Auth::user()->first_name }}">
            
                <button class="btn btn-primary" type="submit">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection