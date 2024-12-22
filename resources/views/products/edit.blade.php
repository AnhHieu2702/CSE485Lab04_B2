@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Sửa sản phẩm</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Tên sản phẩm</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $product->name) }}" required>
        </div>
        <div class="form-group">
            <label for="description">Mô tả</label>
            <textarea class="form-control" id="description" name="description">{{ old('description', $product->description) }}</textarea>
        </div>
        <div class="form-group">
            <label for="price">Giá</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ old('price', $product->price) }}" required>
        </div>
        <div class="form-group">
            <label for="quantity">Số lượng tồn kho</label>
            <input type="number" class="form-control" id="quantity" name="quantity" value="{{ old('quantity', $product->quantity) }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật sản phẩm</button>
    </form>
</div>
@endsection
