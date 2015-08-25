@extends('layout')

@section('main')
<h1>Update User</h1>

@if($errors->count() > 0)
<div class="errors">
    @foreach($errors->all() as $error)
    <div>{{ $error }}</div>
    @endforeach
</div>
@endif

<form action="{{ URL::to('users') }}/{{$user->id}}/update" method="POST">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
    <div><span>First Name: </span><input type="text" name="first_name" value="{{ $user->first_name }}"></div>
    <div><span>Last Name: </span><input type="text" name="last_name" value="{{ $user->last_name }}"></div>
    <div><span>Email: </span><input type="text" name="email" value="{{ $user->email }}"></div>
    <div><span>Phone: </span><input type="text" name="phone" value="{{ $user->phone }}"></div>


    <div><button>Save</button></div>
</form>
@endsection