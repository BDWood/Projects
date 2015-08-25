@extends('layout')

@section('main')
<h1>All Invoices</h1>

<table>
    <tr>
        <th>Invoice ID</th>
        <th>Customer ID</th>
        <th>Time Created</th>
    </tr>

    @foreach($invoices as $i)
    <tr>
        <td><a href="invoice/{{ $i->id }}">{{ $i->id }}</a></td>
        <td>{{ $i->customer_id }}</td>
        <td>{{ $i->created_at }}</td>
        <td><a href="invoice/{{$i->id}}/edit">Edit</a></td>
        <td><a href="invoice/{{$i->id}}/edit">Delete</a></td>
    </tr>
    @endforeach

</table>

<a href="{{ URL::to('invoice/new') }}">New Invoice</a>
@endsection