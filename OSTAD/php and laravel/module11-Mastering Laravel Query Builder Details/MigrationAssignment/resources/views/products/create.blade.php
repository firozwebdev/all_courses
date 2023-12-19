<!-- resources/views/products/create.blade.php -->
@extends('welcome')

@section('content')
    <div class="container">
    <form action="{{route('products.store')}}" method="post">
        @csrf

        <div class="form-group">
            <label for="name">Product Name</label>
            <input name="name" type="text" class="form-control" id="name" placeholder="Product Name">
            <small class="form-text text-muted">Help message here.</small>
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Product Quantity</label>
            <input class="form-control" type="number" name="quantity" placeholder="Quantity" required>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Product Price</label>
            <input class="form-control" type="number" name="price" placeholder="Price" step="0.01" required>
        </div>

        <button type="submit">Add Product</button>
    </form>
    </div>

@endsection
