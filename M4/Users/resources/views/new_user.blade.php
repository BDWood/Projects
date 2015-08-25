@extends('layout')

@section('main')
<h1>New User</h1>
<form action="/users/create" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div><span>First Name: </span><input type="text" name="first_name" value=""></div>
    <div><span>Last Name: </span><input type="text" name="last_name" value=""></div>
    <div><span>Email: </span><input type="email" name="email" value=""></div>
    <div><span>Phone: </span><input type="text" name="phone" value=""></div>
    <div><button>Save</button></div>
</form>
@endsection