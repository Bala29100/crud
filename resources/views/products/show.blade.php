@extends('layouts.app')
@section('main')
    <h5><i class="bi bi-phone"></i>Product Details</h5>
    <hr />

    <nav class="my-2">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./index.html">Home</a></li>
            <li class="breadcrumb-item active">View Product</li>
        </ol>
    </nav>

    <div class="card">
        <img src="../Assets/samsung-a54.jpg" alt="Product" class="card-img-top" />

        <div class="card-body">
            <h5 class="card-tittle fw-bold">Samsung A54</h5>
            <p class="card-text">
                The Samsung Galaxy A54 5G smartphone has a stunning design, thanks
                to its thin frame and neat camera layout. You can record life-like
                videos on its mesmerising camera with VDIS and auto focus.
                Capturing nightlife has never been easy, all thanks to the Wide
                OIS and image sensor featured in this smartphone. It ensures
                durability with the Gorilla glass and IP67 rating so that you can
                use your smartphone for all your adventures.
            </p>
            <p class="card-text_mrp fw-bolder">
                M.R.P : <small>Rs.41999</small>
            </p>
            <p class="card-text_selling fw-bolder">
                Selling Price : <small>Rs.36500</small>
            </p>
        </div>
    </div>
@endsection
