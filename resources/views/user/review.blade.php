@extends('layouts.app')

@section('title')
Account
@endsection

@section('content')
<div class="row">
    <div class="col-md-3">
        @include('partials.list-group')
    </div>
</div>
<div class="container">
    <div class="row">
        @foreach(Auth::user()->reviews as $review)
            <li>{{ $review->headline }}</li>
        @endforeach
    </div>
</div>
@endsection