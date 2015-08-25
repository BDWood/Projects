@extends('layout')

@section('main')
<h1>Create Customer</h1>

{{-- {{ print_r($errors->all()) }} --}}

@if($errors->count() > 0)
<div class="errors">
    @foreach($errors->all() as $error)
    <div>{{ $error }}</div>
    @endforeach
</div>
@endif

<form action="{{ URL::to('Invoice/new') }}" method="POST">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    <div><span>Price: </span><input type="text" name="phone" value=""></div>
    <div><span>Name: </span><input type="text" name="gender" value=""></div>
    <div><span>Description: </span><input type="text" name="gender" value=""></div>
    <div><button>Save</button></div>
</form>

@endsection