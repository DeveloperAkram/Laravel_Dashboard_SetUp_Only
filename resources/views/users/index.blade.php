@extends('layouts.master')

@section('main')

    <div style="padding: 50px 20px 0 350px">
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
        <th scope="col">Action</th>
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
             <td>
                 <a href="{{route("user.show",$user->id)}}" class="btn btn-success">View</a>
                 <a href="{{route("user.edit",$user->id)}}" class="btn btn-warning">Edit</a>
                 <a href="{{route("user.delete",$user->id)}}" class="btn btn-danger">Delete</a>

             </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>

@stop
