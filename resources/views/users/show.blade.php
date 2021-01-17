@extends('layouts.master')

@section('main')
<div style="padding: 50px 20px 0 350px">

    <ul class="list-group">
        <li class="list-group-item active" aria-current="true">{{$user->name}}</li>
        <li class="list-group-item">Email: {{$user->email}}</li>
        <li class="list-group-item">Phone: {{$user->phone}}</li>
        <li class="list-group-item">Address: {{$user->address}}</li>
    </ul>

    <a href="{{route('user.edit',$user->id)}}" class="btn btn-warning">Edit</a>
<div>


@stop
