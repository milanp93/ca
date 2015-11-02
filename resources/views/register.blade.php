@extends('master')
@section('content')
    <div class="col-md-8">
        @include('navigation')

        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="login-form">
                    <form action="register" method="POST">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label for="name">Your name:</label>
                            <input type="text" name="name" class="form-control" id="name" value="{!! old('name') !!}">
                        </div>
                        <div class="form-group">
                            <label for="email">Your email address:</label>
                            <input type="email" name="email" class="form-control" id="email"
                                   value="{!! old('email') !!}">
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" name="password" class="form-control" id="password">
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Password confirmation:</label>
                            <input type="password" name="password_confirmation" class="form-control"
                                   id="password_confirmation">
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-lg-offset-6">
                                <button type="submit" class="btn btn-default right">Register</button>
                            </div>
                        </div>
                    </form>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
    @include('sidebar')
@stop