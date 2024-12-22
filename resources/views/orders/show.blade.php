@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Xem chi tiết</h1>
    <div class="card">
        <div class="card-header">
            Order #{{ $order->id }}
        </div>
        <div class="card-body">
            <p class="card-text"><strong>Khách hàng:</strong> {{ $order->customer->name }}</p>
            <p class="card-text"><strong>Ngày mua:</strong> {{ $order->order_date }}</p>
            <p class="card-text"><strong>Trạng thái:</strong> {{ $order->status ? 'Completed' : 'Pending' }}</p>
        </div>
    </div>
    <a href="{{ route('orders.index') }}" class="btn btn-primary mt-3">Trở lại trang chủ</a>
</div>
@endsection
