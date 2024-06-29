@extends('layouts.app')
@section('main')
    <div class="d-flex justify-content-between">
        <h5><i class="bi bi-journal-richtext"></i> Product Details</h5>
        <a href="products/create" class="btn btn-primary"><i class="bi bi-plus-circle"></i> New Product</a>
    </div>
    <div class="col-md-12 table-responsive mt-3">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Image</th>
                    <th>Product Name</th>
                    <th>M.R.P</th>
                    <th>Selling Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            @foreach ($products as $product)
                <tbody>
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <a href="/products/{{ $product->id }}/show"><img src="products/{{ $product->image }}"
                                    style="width: 60px; height: 60px; object-fit: contain" alt="Product" /></a>
                        </td>
                        <td>{{ $product->name }}</td>
                        <td>Rs: {{ $product->mrp }}</td>
                        <td>Rs: {{ $product->price }}</td>
                        <td>
                            <a href="./edit.html" class="btn btn-success btn-sm"><i class="bi bi-pencil-square"></i></a>
                            <a href="#" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>
@endsection
