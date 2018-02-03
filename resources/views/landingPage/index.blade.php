@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <h3>Welcome, {{Auth::user()->name}} <i class="far fa-smile"></i></h3>
            <div class="col-lg-6">
                <div class="panel panel-primary">
                    <div class="panel-heading home-heading">
                        <div class="row">
                            <div class="col-lg-1"><i class="home-icons fas-landing-page fas fa-plus-circle"></i></div>
                            <div class="col-lg-6 custom-panel-title">Let's create home</div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <a class="btn btn-primary" href="{{route('create_home')}}">
                            Create home
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="panel panel-success">
                    <div id="join-home-heading" class="panel-heading home-heading">
                        <div class="row">
                            <div class="col-lg-1"><i class="home-icons fas-landing-page fas fa-sign-in-alt"></i></div>
                            <div class="col-lg-6 custom-panel-title"> Let's join a home</div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="#" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="input-group leading">
                                <input placeholder="Enter invitation code" type="text" class="form-control">
                            <span class="input-group-btn">
                                <input id="join-home-btn" class="btn btn-success" type="submit" value="Join Home!">
                            </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection