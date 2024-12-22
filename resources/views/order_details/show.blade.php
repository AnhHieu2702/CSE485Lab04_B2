@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Order Detail #{{ $orderDetail->id }}</h1>
    <ul>
        <li><strong>Order ID:</strong> {{ $orderDetail->order_id }}</li>
        <li><strong>Product ID:</strong> {{ $orderDetail->product_id }}</li>
        <li><strong>Quantity:</strong> {{ $orderDetail->quantity }}</li>
    </ul>
    <a href="{{ route('order_details.index') }}" class="btn btn-secondary">Back to List</a>
</div>
@endsection
