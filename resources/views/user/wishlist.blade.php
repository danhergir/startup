@extends('layouts.app')

@section('title')
    User wishlist
@endsection

@section('content')
@foreach(Auth::user()->wishlist as $wishlist)
    {{ $wishlist->id }}
@endforeach
@endsection