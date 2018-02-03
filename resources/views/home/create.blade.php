@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                @if($errors->has('exception'))
                    <span class="help-block">
                        <strong>{{$errors->first('exception')}}</strong>
                    </span>
                @endif
                <form role="form" method="post" action="{{route('save_home')}}" enctype="multipart/form-data">
                    <fieldset>
                        {{csrf_field()}}
                        <legend>Create your <i class="fas fa-home"></i></legend>
                        <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
                            <label for="name">Name</label>
                            <input class="form-control" type="text" name="name" id="name" placeholder="your home name" value="{{old('name')}}">

                            @if($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{$errors->first('name')}}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group {{$errors->has('phone_number') ? ' has-error' : ''}}">
                            <label for="phone_number">Phone Number</label>
                            <input class="form-control" type="number" name="phone_number" id="phone_number" placeholder="your home phone number" value="{{old('phone_number')}}">

                            @if($errors->has('phone_number'))
                                <span class="help-block">
                                    <strong>{{$errors->first('phone_number')}}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group {{$errors->has('address') ? ' has-error' : ''}}">
                            <label for="address">Address</label>
                            <input type="text" name="address" id="address" class="form-control" placeholder="your home main address" value="{{old('address')}}">
                            @if($errors->has('address'))
                                <span class="help-block">
                                    <strong>{{$errors->first('address')}}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group {{$errors->has('address_details') ? ' has-error' : ''}}">
                            <label form="address_details">Address Details</label>
                            <input type="text" name="address_details" id="address_details" class="form-control" placeholder="your home address details" value="{{old('address_details')}}">

                            @if($errors->has('address_details'))
                                <span class="help-block">
                                    <strong>{{$errors->first('address_details')}}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6 {{$errors->has('location_lat') ? ' has-error' : ''}}">
                                <label form="location_lat">Location Latitude</label>
                                <input type="text" name="location_lat" id="location_lat" class="form-control" placeholder="you home location latitude" value="{{old('location_lat')}}">

                                @if($errors->has('location_lat'))
                                    <span class="help-block">
                                        <strong>{{$errors->first('location_lat')}}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-lg-6 {{$errors->has('location_lng') ? 'has-error' : ''}}">
                                <label for="location_lng">Location Longitude</label>
                                <input type="text" name="location_lng" id="location_lng" class="form-control" placeholder="your home location longitude" value="{{old('location_lng')}}">

                                @if($errors->has('location_lng'))
                                    <span class="help-block">
                                        <strong>{{$errors->first('location_lng')}}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </fieldset>
                    <input type="submit" value="Create My Home" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
@endsection