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
        <h3 class="pt-3">Manage your address</h3>
        <p>In order to create a quicker and simpler way of shopping, you can create and save your addresses. Enter and save yours.</p>
        <hr>
        <div class="full-name pt-3 col-md-12">
            <div class="row">
                <div class="col-md">
                    <button class="btn btn-primary" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        <i class="fas fa-plus mr-2"></i> Add a new address 
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="collapse" id="collapseExample">
                        <hr>
                        <div class="card">
                            <form class="card-body" method="post" action="{{ route('user.newAddress', $user) }}">
                                {{ csrf_field() }}

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="firstName" class="col-sm-4 col-form-label text-md-left">{{ __('First name') }}</label>
                                        <div class="col-md-10">
                                            <input id="firstName" type="text" class="form-control" name="first_name" required autofocus>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="lastName" class="col-sm-4 col-form-label text-md-left">{{ __('Last name') }}</label>
                                        <div class="col-md-10">
                                            <input id="lastName" type="text" class="form-control" name="last_name" required autofocus>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="streetAddress" class="col-sm-4 col-form-label text-md-left">{{ __('First address') }}</label>
                                        <div class="col-md-10">
                                            <input id="streetAddress" type="text" class="form-control" name="street_address" required autofocus>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="streetAddress2" class="col-sm-4 col-form-label text-md-left">{{ __('Other address') }}</label>
                                        <div class="col-md-10">
                                            <input id="streetAddress2" type="text" class="form-control" name="street_address2" required autofocus>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="country" class="col-sm-4 col-form-label text-md-left">{{ __('Country') }}</label>
                                        <div class="col-md-10">
                                            <input id="country" type="text" class="form-control" name="country" required autofocus>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="city" class="col-sm-4 col-form-label text-md-left">{{ __('City') }}</label>
                                        <div class="col-md-10">
                                            <input id="city" type="text" class="form-control" name="city" required autofocus>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="stateProvince" class="col-sm-4 col-form-label text-md-left">{{ __('State/Province') }}</label>
                                        <div class="col-md-10">
                                            <input id="stateProvince" type="text" class="form-control" name="state_province" required autofocus>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="phoneNumber" class="col-sm-4 col-form-label text-md-left">{{ __('Phone number') }}</label>
                                        <div class="col-md-10">
                                            <input id="phoneNumber" type="text" class="form-control" name="phone_number" required autofocus>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="phoneNumber2" class="col-sm-5 col-form-label text-md-left">{{ __('Alternate phone') }}</label>
                                        <div class="col-md-10">
                                            <input id="phoneNumber2" type="text" class="form-control" name="phone_number2" required autofocus>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="addressType" class="col-sm-4 col-form-label text-md-left">{{ __('Address type') }}</label>
                                        <div class="col-md-10">
                                            <input id="addressType" type="text" class="form-control" name="address_type" required autofocus>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="form-group row">
                                        <div class="col-md">
                                            <a class="text-dark mr-2" style="cursor:pointer"  data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><u>Cancel</u></a>
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div> 
                                </div>   
                            </form>
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