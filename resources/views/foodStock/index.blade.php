@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="full-width-section col-xs-12">
                <a href="#" class="btn btn-success add-item fas fa-plus-circle">  Add new item</a>
                <div class="list-panel panel panel-primary">
                    <div class="panel-heading">
                        Your food stock items <i class="far fa-lemon"></i>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-hover table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Type</th>
                                    <th>Current amount</th>
                                    <th>Unit</th>
                                    <th>Favorite seller</th>
                                    <th>Created at</th>
                                    <th>Updated at</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($food_items as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>
                                            @if(MyJson::validate($item->name))
                                                {{MyJson::parse($item->name)->en}}
                                            @endif
                                        </td>
                                        <td>{{$item->description}}</td>
                                        <td>
                                            @if(isset($item->type))
                                                {{$item->type->name}}
                                            @endif
                                        </td>
                                        <td>{{$item->current_amount}}</td>
                                        <td>
                                            @if(isset($item->unit))
                                                {{$item->unit->name}}
                                            @endif
                                        </td>
                                        <td>
                                            @if(isset($item->favoriteSeller))
                                                {{$item->favoriteSeller->name}}
                                            @endif
                                        </td>
                                        <td>{{date('d/m/Y', strtotime($item->created_at))}}</td>
                                        <td>{{date('d/m/Y', strtotime($item->updated_at))}}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary">Actions</button>
                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a tabindex="-1" href="#">View</a></li>
                                                    <li><a tabindex="-1" href="#">Edit</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$food_items->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection