@extends('layouts.app')

@section('title')
Account 
@endsection

@section('content')
<div class="row">
    <div class="col-md-3">
        @include('partials.list-group')
    </div>
    <div class="col-md-8">
        <h3 class="pt-3">Account settings</h3>
        <div class="account-header">
            <div class="title">
                <h5 class="font-weight-bold pt-4">Personal information</h5>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="full-name pt-3 col-md-8">
                <p><strong>Full name</strong></p>
                <div class="row">
                    <div class="col">
                        <h6>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h6>
                    </div>
                    <div class="col">
                        <a class="text-muted" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            <h6><u>Edit</u></h6>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10">
                        <div class="collapse" id="collapseExample">
                            <hr>
                            <div class="card card-body">
                                <form method="post" action="{{ route('user.nameUpdate', $user) }}">
                                    {{ csrf_field() }}
                                    {{ method_field('patch') }}
                                    
                                    <div class="form-group">
                                        <label for="first_name"><strong>First name (Required)</strong></label>
                                        <input type="first_name" value="{{ Auth::user()->first_name }}" class="form-control" id="first_name_input" name="first_name" aria-describedby="first_name">
                                    </div>
                                    <div class="form-group">
                                        <label for="last_name"><strong>Last name (Required)</strong></label>
                                        <input type="last_name" value="{{ Auth::user()->last_name }}" class="form-control" id="last_name_input" name="last_name" aria-describedby="lasst_name">
                                    </div>
                                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="full-name pt-3 col-md-8">
                <p><strong>Email</strong></p>
                <div class="row">
                    <div class="col">
                        <h6>{{ Auth::user()->email }}</h6>
                    </div>
                    <div class="col">
                        <a class="text-muted" data-toggle="collapse" href="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
                            <h6><u>Edit</u></h6>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10">
                        <div class="collapse" id="collapseExample2">
                            <hr>
                            <div class="card card-body">
                                <form method="post" action="{{ route('user.emailUpdate', $user) }}">
                                    {{ csrf_field() }}
                                    {{ method_field('patch') }}
                                    
                                    <div class="form-group">
                                        <label for="email"><strong>Email (Required)</strong></label>
                                        <input type="email" value="{{ Auth::user()->email }}" class="form-control" id="email_input" name="email" aria-describedby="email">
                                    </div>
                                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>     
    </div>
</div>
<div class="row">
    <div class="col-md-8 offset-md-3">
        <div class="account-header">
            <div class="title">
                <h5 class="font-weight-bold pt-4">Password management</h5>
            </div>
        </div>
        <div class="row">
            <div class="full-name pt-3 col-md-8">
                <p><strong>Password</strong></p>
                <div class="row">
                    <div class="col">
                        <h6>**********<h6>
                    </div>
                    <div class="col">
                        <a class="text-muted" data-toggle="collapse" href="#collapseExample3" aria-expanded="false" aria-controls="collapseExample3">
                            <h6><u>Edit</u></h6>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10">
                        <div class="collapse" id="collapseExample3">
                            <hr>
                            <div class="card card-body">
                                <form method="post" action="{{ route('user.passwordUpdate', $user) }}">
                                    {{ csrf_field() }}
                                    {{ method_field('patch') }}
                                    
                                    <div class="form-group">
                                        <label for="password"><strong>Password</strong></label>
                                        <input type="password" class="form-control" id="password_input" name="password" aria-describedby="password">
                                    </div>
                                    <div class="form-group">
                                        <label for="password-confirmation"><strong>Password confirmation</strong></label>
                                        <input type="password" class="form-control" id="password_input" name="password_confirmation" aria-describedby="password-confirmation">
                                    </div>

                                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample3">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
