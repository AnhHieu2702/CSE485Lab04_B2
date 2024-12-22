@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Delete Order Detail</h1>
    <p>Are you sure you want to delete the following order detail?</p>
    <ul>
        <li><strong>ID:</strong> {{ $orderDetail->id }}</li>
        <li><strong>Order ID:</strong> {{ $orderDetail->order_id }}</li>
        <li><strong>Product ID:</strong> {{ $orderDetail->product_id }}</li>
        <li><strong>Quantity:</strong> {{ $orderDetail->quantity }}</li>
    </ul>
    <form action="{{ route('order_details.delete', $orderDetail->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Confirm Delete</button>
        <a href="{{ route('order_details.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
