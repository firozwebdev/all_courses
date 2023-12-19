@extends('welcome')

@section('content')
    <div class="container">
        <h1>List of Products</h1>
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th scope="col">NO.</th>
                <th scope="col">Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)

                <tr>
                    <th scope="row">1</th>
                    <td>{{$product->name}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->price}}</td>
                    <td>
                        <a href="{{ route('products.sell',['id'=>$product->id]) }}"><button class="btn btn-outline-info btn-sm">Sell</button></a>
                        <a href="{{ route('products.edit',['id'=>$product->id]) }}"><button class="btn btn-outline-warning btn-sm">Update</button></a>
                        <a href="{{ route('products.destroy',['id'=>$product->id]) }}"><button class="btn btn-outline-danger btn-sm">Delete</button></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
