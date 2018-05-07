@extends('layouts.app')

@section('title')
    Brand
@endsection

@section('content')
<div class="container">
<h1>This is {{$product->id}}</h1>
<h2>This is {{$product->title}}</h2>
<img src="{{$product->imageUrl}}" alt="">
</div>
@endsection