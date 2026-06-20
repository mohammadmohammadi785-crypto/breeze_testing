<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::with('images')->get();
        return view('Product.index')->with('products', $product);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $request->validate([
            "name"=> "required|string|min:3",
            "price"=> "required|integer|min:10",
            "stock"=> "required|integer|min:1",
            "image1"=> "required|image|mimes:png,jpg,jpeg,svg,gif",
            "image2"=> "required|image|mimes:png,jpg,jpeg,svg,gif",
        ]);
        $product = Product::create([
            "name"=> $request->name,
            "price"=> $request->price,
            "stock"=> $request->stock,
        ]);
        $imageUrl1 = null;
        $imageUrl2 = null;
        if($request->hasFile("image1") && $request->hasFile("image2")){
            $imageUrl1 = $request->file("image1")->store("product_images", "public");
            $imageUrl2 = $request->file("image2")->store("product_images", "public");
            $product->images()->createMany(
                [
                    ["image_url"=>$imageUrl1],
                    ["image_url"=>$imageUrl2],
                ]
            );
        }
        return redirect('/product');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
