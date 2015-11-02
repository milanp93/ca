@extends('master')
@section('content')
    <div class="col-md-8">
        @include('navigation')

        <div class="row">
            <div class="col-lg-12">
                <div class="login-form">
                    <h4>My recepies</h4>
                    <table id="recepies" class="dataTable">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Visibility</th>
                            <th>Date created</th>
                            <th>Added by</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($recepies as $rec)
                            <tr>
                                <td>{!! $rec->name !!}</td>
                                <td><?php if ($rec->display == 0) {
                                        echo 'Private';
                                    } else {
                                        echo 'Public';
                                    } ?> </td>
                                <td>{!! $rec->created_at !!}</td>
                                <td>{!! $rec->user->name !!}</td>
                                <td><a href="recepie/{!! $rec->id !!}/edit">Edit</a> / <a href="recepie/{!! $rec->id !!}/delete">Delete</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
    @include('sidebar')
@stop