@extends('layouts.app')

@section('title')
Account
@endsection

@section('content')
<div class="row" id="app">
    <div class="col-md-3">
        @include('partials.list-group')
    </div>
    <div class="col-md-8">
        <h3 class="pt-3">Your comments & reviews</h3>
        @foreach(Auth::user()->reviews->chunk(3) as $reviews)
        <div class="row">
        @foreach($reviews as $review)
            <div class="comment mt-5 border border-dark pl-3 pt-3 pb-3 mb-3 mr-5 rounded col-md-5">
                <div class="reviews-user pb-2">
                    <div class="row">
                        <div class="col-md-10">
                            <h4>{{ $review->headline }}</h4>
                        </div>
                        <div class="col-md-2">
                            <form class="float-right" method="post" action="{{ route('user.deleteReview') }}">
                                {{ csrf_field() }}
                                <input type='hidden' value='{{ $review->id }}' name='review_id'/>
                                <button class="text-dark mr-2" style="cursor:pointer; border:hidden" type="submit"><u><i class="fas fa-times"></i></u></button>
                            </form> 
                        </div>
                    </div>
                </div>
                <div class="user-rating">
                    <star-rating class="pr-3 " :star-size="20" :read-only="true" :show-rating="false" :rating="{{ $review->rating }}"></star-rating>
                </div>
                <div class="body-text pt-3 pr-5">
                    <p style="text-align:justify"><strong>{{ $review->description }}</strong></p>
                </div>
                <div class="author pt-2">
                    <h6 class="text-muted">{{ $review->user_name }},  {{ date('d-m-Y', strtotime( $review->created_at )) }}</h6>
                </div>
            </div>
        @endforeach
        </div>
        @endforeach
    </div>
</div>
@endsection