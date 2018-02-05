@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="panel-title">Add new item to your food stock <i class="far fa-lemon"></i></div>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" action="{{route('save_item')}}" method="post" role="form" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group col-md-10 {{$errors->has('item_name') ? 'has-error' : ''}}">
                            <label for="item_name">Item Name*</label>
                            <input type="text" name="item_name" id="item_name" class="form-control" value="{{old('item_name')}}">
                            @if($errors->has('item_name'))
                                <span class="help-block">
                                    <strong>{{$errors->first('item_name')}}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-md-10 {{$errors->has('description') ? 'has-error' : ''}}">
                            <label for="description">Item Description</label>
                            <input type="text" name="description" id="description" class="form-control" value="{{old('description')}}">
                            @if($errors->has('description'))
                                <span class="help-block">
                                    <strong>{{$errors->first('description')}}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-md-10 {{$errors->has('item_type') ? 'has-error' : ''}}">
                            <label for="item_type">Item Type*</label>
                            <select name="item_type" id="item_type" class="form-control">
                                {{--@foreach($item_types as $type)--}}
                                    {{--@if($type->id == old('item_type'))--}}
                                        {{--<option selected value="{{$type->id}}">{{$type->name}}</option>--}}
                                    {{--@else--}}
                                        {{--<option value="{{$type->id}}">{{$type->name}}</option>--}}
                                    {{--@endif--}}
                                {{--@endforeach--}}
                            </select>
                            @if($errors->has('item_type'))
                                <span class="help-block">
                                        <strong>{{$errors->first('item_type')}}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group col-md-10 {{$errors->has('current_amount') ? 'has-error' : ''}}">
                            <label for="current_amount">Current Amount*</label>
                            <input type="number" name="current_amount" id="current_amount" class="form-control" value="{{old('current_amount')}}">
                            @if($errors->has('current_amount'))
                                <span class="help-block">
                                    <strong>{{$errors->first('current_amount')}}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-md-10 {{$errors->has('unit') ? 'has-error' : ''}}">
                            <label for="unit">Unit*</label>
                            <select class="form-control" name="unit" id="unit">
                                {{--@foreach($units as $unit)--}}
                                    {{--@if($unit->id == old('unit'))--}}
                                        {{--<option selected value="{{$unit->id}}">{{$unit->name}}</option>--}}
                                    {{--@else--}}
                                        {{--<option value="{{$unit->id}}">{{$unit->name}}</option>--}}
                                    {{--@endif--}}
                                {{--@endforeach--}}
                            </select>
                            @if($errors->has('unit'))
                                <span class="help-block">
                                    <strong>{{$errors->first('unit')}}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-md-10 {{$errors->has('fav_seller') ? 'has-error' : ''}}">
                            <label for="fav_seller">Favorite Seller</label>
                            <select id="fav_seller" name="fav_seller" class="form-control">
                                {{--@foreach($sellers as $seller)--}}
                                    {{--@if($seller->id == old('fav_seller'))--}}
                                        {{--<option selected value="{{$seller->id}}">{{$seller->name}}</option>--}}
                                    {{--@else--}}
                                        {{--<option value="{{$seller->id}}">{{$seller->name}}</option>--}}
                                    {{--@endif--}}
                                {{--@endforeach--}}
                            </select>
                            @if($errors->has('fav_seller'))
                                <span class="help-block">
                                    <strong>{{$errors->first('fav_seller')}}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-md-10">
                            <input type="submit" value="Save Item" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection