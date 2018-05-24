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
            @foreach(Auth::user()->addresses->chunk(3) as $addresses)
            <div class="row">
            @foreach($addresses as $address)
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <div class="card-header">
                                <div class="card-title">
                                    <div class="delete-button">
                                        <form method="post" action="{{ route('user.deleteAddress', $address) }}">
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
                                            <button type="submit" class="btn btn-primary"><i class="fas fa-times"></i></button>
                                        </form>
                                    </div>
                                    <div class="address-user pb-2">
                                        <h6>{{ $address->first_name }} {{ $address->last_name }}</h6>
                                    </div>
                                    <div class="address-info">
                                        <p>{{ $address->street_address }}, {{ $address->street_address2 }}, {{ $address->city }}, {{ $address->country }}</p>
                                    </div>
                                    <div class="phone type-address">
                                        <p>Phone: {{ $address->phone_number }}</p>
                                        <p>Alt phone: {{ $address->phone_number2 }}</p>
                                        <p>Type: {{ $address->address_type }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach
            </div>
            @endforeach
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
                                            <input id="firstName" type="text" class="form-control" name="first_name" placeholder="First name" required autofocus>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="lastName" class="col-sm-4 col-form-label text-md-left">{{ __('Last name') }}</label>
                                        <div class="col-md-10">
                                            <input id="lastName" type="text" class="form-control" name="last_name" placeholder="Last name" required autofocus>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="streetAddress" class="col-sm-4 col-form-label text-md-left">{{ __('First address') }}</label>
                                        <div class="col-md-10">
                                            <input id="streetAddress" type="text" class="form-control" name="street_address" placeholder="Street 123" required autofocus>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="streetAddress2" class="col-sm-4 col-form-label text-md-left">{{ __('Other address') }}</label>
                                        <div class="col-md-10">
                                            <input id="streetAddress2" type="text" class="form-control" name="street_address2" placeholder="Apartment/Suite 00" required autofocus>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="country" class="col-sm-4 col-form-label text-md-left">{{ __('Country') }}</label>
                                        <div class="col-md-10">
                                            <select style="height:38px" name="country" id="country" class="col-md-12 col-form-label text-md-left">
                                                <option value="COL">Colombia</option>
                                                <option value="USA">United States</option>
                                                <option value="MEX">Mexico</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="stateProvince" class="col-sm-4 col-form-label text-md-left">{{ __('State/Province') }}</label>
                                        <div class="col-md-10">
                                            <input id="stateProvince" type="text" class="form-control" name="state_province" placeholder="California" required autofocus>
                                        </div>
                                    </div>   
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="city" class="col-sm-4 col-form-label text-md-left">{{ __('City') }}</label>
                                        <div class="col-md-10">
                                            <input id="city" type="text" class="form-control" name="city" placeholder="San Francisco" required autofocus>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="phoneNumber" class="col-sm-4 col-form-label text-md-left">{{ __('Phone number') }}</label>
                                        <div class="col-md-10">
                                            <input id="phoneNumber" type="text" class="form-control" name="phone_number" placeholder="000-000-0000" required autofocus>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="phoneNumber2" class="col-sm-5 col-form-label text-md-left">{{ __('Alternate phone') }}</label>
                                        <div class="col-md-10">
                                            <input id="phoneNumber2" type="text" class="form-control" name="phone_number2" placeholder="000-000-0000" required autofocus>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="addressType" class="col-sm-4 col-form-label text-md-left">{{ __('Address type') }}</label>
                                        <div class="col-md-10">
                                            <select style="height:38px" name="address_type" id="addressType" class="col-md-12 col-form-label text-md-left">
                                                <option value="Home/House">House/Home</option>
                                                <option value="Business/Office">Office/Business<option>
                                            </select>
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