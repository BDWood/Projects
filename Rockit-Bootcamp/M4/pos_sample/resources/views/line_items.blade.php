@extends('layout')

@section('main')
<h1>Line Item</h1>

<table>
    <tr>
        <th>Invoice Id</th>
        <th>Item Id</th>
        <th>Customer Id</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
    </tr>

    @foreach($lineitems as $li)
    <tr>
        <td><a href="invoice/{{ $li->invoice_id }}">{{ $li->invoice_id }}</a></td>
        <td>{{ $li->item_id }}</td>
        <td>{{ $li->customer_id }}</td>
        <td>{{ $li->name }}</td>
        <td>{{ $li->description }}</td>
        <td>{{ $li->price}}</td>
    </tr>
    @endforeach

</table>

@endsection