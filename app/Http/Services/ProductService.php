<?php

namespace App\Http\Services;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImages;

class ProductService {

    public function index()
    {
        $category = Category::all();
        return $category;
    }

    public function create($request)
    {
        // dd($request->all());
        $product = new Product();
        $product->product_name = $request->product_name;
        $product->category_id = $request->category_id;
        $product->description = $request->description;
        $product->color = $request->color;
        $product->weight = $request->weight;
        $product->price = $request->price;
        $product->save();

        if ($request->hasFile('productImage')) {
            foreach ($request->file('productImage') as $file) {
                    $timestamp = now()->format('Y-m-d-His');
                    $extension = $file->getClientOriginalExtension();
                    $filename = $timestamp . '_' . $file->getClientOriginalName();
                    $file->storeAs('public/products', $filename);
                    $productImage = new ProductImages(['filename' => $filename]);
                    $productImage->product_id = $product->id;
                    $productImage->save();
            }
        }

        return true;

    }

    public function productList()
    {
        $data = Product::with('images')->get();
        return $data;
    }

}
