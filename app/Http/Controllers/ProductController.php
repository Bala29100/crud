<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::get();
        return view("products.index", ["products" => $products]);
    }
    public function create()
    {
        return view("products.create");
    }
    public function store(Request $request)
    {
        //dd($request);
        $request->validate([
            "name" => "required",
            "price" => "required|numeric",
            "description" => "required",
            "mrp" => "required|numeric",
            "image" => "required|mimes:jpeg,jpg,png,gif,webp|max:50000"
        ]);

        $imageName = time() . "." . $request->image->extension();
        $request->image->move(public_path("products"), $imageName);

        $product = new Product;
        $product->name = $request->name;
        $product->mrp = $request->mrp;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->image = $imageName;
        $product->save();
        return back()->withSuccess('product details added success');
    }

    public function show($id)
    {
        $product = Product::where('id', $id)->first();
        return view('products.show', ['product' => $product]);
    }
}
