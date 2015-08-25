@extends('layout')

@section('main')
<h1>Invoice: {{ $invoice->id }}</h1>

<div><span>Invoice ID:</span><span>{{ $invoice->id }}</span></div>
<div><span>Customer ID:</span><span>{{ $invoice->customer_id }}</span></div>
<div><span>Created At:</span><span>{{ $invoice->created_at }}</span></div>
<div><a href="invoices/{id}/edit">Edit This Invoice</a></div>


@endsection

