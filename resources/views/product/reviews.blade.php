@extends('layouts.app')

@section('title')
Review create
@endsection

@section('content')
<form method="post" action="{{ route('review.store') }}">
    {{ csrf_field() }}
    <h5>Form title</h5> 

    <div class="form-group">
        <label for="headline"><strong>Headline</strong></label>
        <input type="text" class="form-control" name="headline" id="headline" placeholder="Review title">
    </div>
    <div class="form-group">
        <label for="headline"><strong>Rating</strong></label>
        <input type="text" class="form-control" name="rating" id="rating" placeholder="A number from 1 - 5">
    </div>
    <div class="form-group">
        <label for="headline"><strong>Description</strong></label>
        <input type="text" class="form-control" name="description" id="description" placeholder="Tell us about your experience">
    </div>
    
    <input type="hidden" name="product_id" value="{{ $product->id }}">

    <button class="btn btn-primary" type="submit">Save</button>
</form>
@endsection