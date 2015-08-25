@extends('layout')

@section('main')
<h1>User {{$user->id}}</h1>
    
<div><span>First Name: </span><span>{{ $user->first_name }}</span></div>
<div><span>Last Name: </span><span>{{ $user->last_name }}</span></div>
<div><span>Phone: </span><span>{{ $user->phone }}</span></div>
<div><span>Email: </span><span>{{ $user->email }}</span></div>
<div><a href="{{ URL::to('users') }}/{{$user->id}}/update">Update</a></div>
@endsection