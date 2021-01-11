@extends('layouts.master')

@section('main')

    <div style="padding: 50px 20px 0 300px">
        <div>
            <a href="{{route('user.create')}}">Add User</a>

        </div>
    <table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Full Name</th>
        <th scope="col">Email</th>
        <th scope="col">Address</th>
        <th scope="col">Phone</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($users as $key=>$user)
    <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->address}}</td>
        <td>{{$user->phone}}</td>
    </tr>
    @endforeach
    </tbody>
</table>
    </div>

@stop
