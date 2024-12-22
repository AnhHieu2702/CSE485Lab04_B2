@extends('layouts.app')

@section('content')
<div class="container">
    <h1>
    Chỉnh sửa chi tiết đơn hàng</h1>
    <form action="{{ route('order_details.update', $orderDetail->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="order_id" class="form-label">
            ID đơn hàng</label>
            <input type="number" class="form-control" id="order_id" name="order_id" value="{{ $orderDetail->order_id }}" required>
        </div>
        <div class="mb-3">
            <label for="product_id" class="form-label">
            ID sản phẩm</label>
            <input type="number" class="form-control" id="product_id" name="product_id" value="{{ $orderDetail->product_id }}" required>
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">
            Số lượng</label>
            <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $orderDetail->quantity }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
</div>
@endsection
