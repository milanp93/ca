@extends('master')
@section('content')
    <div class="col-md-8">
        @include('navigation')
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="login-form">
                    <form action="login" method="POST">
                        {!! csrf_field() !!}

                        <div class="form-group">
                            <label for="email">Email address:</label>
                            <input type="email" name="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" name="password" class="form-control" id="password">
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" name="remember_token"> Remember me</label>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <small>Login with:</small>
                                <ul>
                                    <li><a href="login/facebook">Facebook</a></li>
                                    <li><a href="login/twitter">Twitter</a></li>
                                    <li><a href="login/google">Google</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <button type="submit" class="btn btn-default right">Submit</button>
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