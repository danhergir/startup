@extends('layouts.app')

@section('title')
Brand
@endsection

@section('content')
<div class="row">
    <div class="col-md-3">
        @include('partials.list-group')
    </div>
    <div class="col-md-8">
        <h3>Purchase history</h3>
        <h6>Orders - You don't have orders yet</h6>
    </div>
</div>
@endsection