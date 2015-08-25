@extends('layout')

@section('main')
    <h1>All Users</h1>
    <table>
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>

    @foreach($users as $user) 
    <tr>
        <td><a href="users/{{ $user->id }}">{{ $user->firstName}}</a></td>
        <td>{{$user->lastName}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->phone}}</td>
        <td><a href="users/{{$user->id}}/update">Update</a></td>
        <td><a href="users/{{$user->id}}/delete">Delete</a></td>
    </tr>
    @endforeach
    </table>
    <div>
        <a href="/users/create">New User</a>
    </div>
@endsection