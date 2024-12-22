@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Chi tiết sản phẩm</h1>
    <ul>
        <li><strong>Tên sản phẩm:</strong> {{ $product->name }}</li>
        <li><strong>Mô tả:</strong> {{ $product->description }}</li>
        <li><strong>Giá:</strong> {{ number_format($product->price, 0, ',', '.') }} VND</li>
        <li><strong>Số lượng tồn kho:</strong> {{ $product->quantity }}</li>
    </ul>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Quay lại danh sách sản phẩm</a>
</div>
@endsection
