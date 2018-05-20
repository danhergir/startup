@extends('layouts.app')

@section('title')
Account settings
@endsection

@section('content')
<div class="row">
    <div class="col-md-3">
        @include('partials.list-group')
    </div>
    <div class="col-md-8">
        <h3>Account settings</h3>
        <div class="card">
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="post" action="{{ route('user.update', $user) }}">
                    {{ csrf_field() }}
                    {{ method_field('patch') }}
                
                    <div class="form-group row">
                        <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('First name') }}</label>
                        <div class="col-md-6">
                            <input id="first_name" type="text" class="form-control" name="first_name" value="{{ $user->first_name }}" required autofocus>
                        </div>
                    </div> 
                
                    <div class="form-group row">
                        <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Last name') }}</label>
                        <div class="col-md-6">
                            <input id="last_name" type="text" class="form-control" name="last_name" value="{{ $user->last_name }}" required autofocus>
                        </div>
                    </div> 
                
                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                        <div class="col-md-6">
                            <input id="email" type="text" class="form-control" name="email" value="{{ $user->email }}" required autofocus>
                        </div>
                    </div> 
                
                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password" value="password" required autofocus>
                        </div>
                    </div> 
                
                    <button class="btn btn-primary rounded" type="submit">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

