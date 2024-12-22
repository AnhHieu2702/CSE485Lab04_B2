@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Chỉnh sửa</h1>
    <form action="{{ route('orders.update', $order->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="customer_id" class="form-label">Khách hàng</label>
            <select name="customer_id" class="form-control" required>
                @foreach($customers as $customer)
                <option value="{{ $customer->id }}" {{ $customer->id == $order->customer_id ? 'selected' : '' }}>
                    {{ $customer->name }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="order_date" class="form-label">Ngày mua</label>
            <input type="date" name="order_date" class="form-control" value="{{ $order->order_date }}" required>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" class="form-control" required>
                <option value="0" {{ $order->status == 0 ? 'selected' : '' }}>Đang xử lý</option>
                <option value="1" {{ $order->status == 1 ? 'selected' : '' }}>Hoàn thành</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Cập nhật</button>
    </form>
</div>
@endsection
