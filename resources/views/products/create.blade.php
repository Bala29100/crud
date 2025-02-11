@extends('layouts.app')
@section('main')
    <h5><i class="bi bi-plus-square-fill"> </i> Add New Product</h5>
    <hr />

    <nav class="my-2">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Add New Product</li>
        </ol>
    </nav>

    <div class="col-md-6">
        <form action="/products/store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-4">
                <div class="col-md-12">
                    <label for="name" class="form-label"> Name</label>
                    <input type="text" id="name" name="name"
                        class="form-control @if ($errors->has('name')) {{ 'is-invalid' }} @endif"
                        value="{{ old('name') }}" placeholder="Enter Product Name" />
                    @if ($errors->has('name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-6">
                    <label for="mrp" class="form-label">M.R.P</label>
                    <input type="text" id="mrp" name="mrp"
                        class="form-control  @if ($errors->has('mrp')) {{ 'is-invalid' }} @endif"
                        placeholder="Enter MRP" value="{{ old('mrp') }}" />
                    @if ($errors->has('mrp'))
                        <div class="invalid-feedback">
                            {{ $errors->first('mrp') }}
                        </div>
                    @endif
                </div>

                <div class="col-md-6">
                    <label for="price" class="form-label">Sellling Price</label>
                    <input type="text" id="price" name="price"
                        class="form-control  @if ($errors->has('price')) {{ 'is-invalid' }} @endif"
                        placeholder="Enter Price" value="{{ old('price') }}" />
                    @if ($errors->has('price'))
                        <div class="invalid-feedback">
                            {{ $errors->first('price') }}
                        </div>
                    @endif
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-12">
                    <label for="description" class="form-label">Description</label>
                    <textarea style="resize: none; height: 150px" placeholder="Enter Description" name="description" id="description"
                        class="form-control  @if ($errors->has('description')) {{ 'is-invalid' }} @endif">{{ old('description') }}</textarea>
                    @if ($errors->has('description'))
                        <div class="invalid-feedback">
                            {{ $errors->first('description') }}
                        </div>
                    @endif
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-12">
                    <label for="image" class="form-label">Product Image</label>
                    <input type="file" id="image" name="image"
                        class="form-control @if ($errors->has('image')) {{ 'is-invalid' }} @endif"
                        placeholder="Upload File Here" />
                    @if ($errors->has('image'))
                        <div class="invalid-feedback">
                            {{ $errors->first('image') }}
                        </div>
                    @endif
                </div>
            </div>

            <div class="mb-4">
                <button type="submit" class="btn btn-primary">
                    Save Product
                </button>
                <button type="reset" class="btn btn-warning">Clear All</button>
            </div>
        </form>
    </div>
@endsection
