<?php

namespace App\Http\Services;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImages;
use Illuminate\Support\Facades\Storage;

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

    public function specificProductList($id)
    {
        $data['detail'] = Product::with('images','category')->where('id', $id)->first();
        $data['category'] = Category::all();
        $data['productImage'] = [];
        foreach ($data['detail']->images as $image) {
            $data['productImage'][] = $image->filename;
        }
        return $data;
    }

    public function delete($id)
    {
        $data = Product::with('images')->where('id', $id)->first();
        if ($data) {
            foreach ($data->images as $image) {
                Storage::delete('public/products/' . $image->filename);
                $image->delete();
            }
            $data->delete();
            return true;
        }

    }

    public function update($request)
    {
        $response = Product::with('images')->findOrFail($request->id);
        $response->product_name = $request->product_name;
        $response->category_id  = $request->category_id;
        $response->description  = $request->description;
        $response->price        = $request->price;
        $response->weight       = $request->weight;
        $response->color        = $request->color;
        $response->save();


        if ($request->hasFile('productImage')) {
            foreach ($response->images as $image) {
                    Storage::delete('public/products/' . $image->filename);
                    $image->delete();

            }
            foreach ($request->file('productImage') as $file) {
                $timestamp = now()->format('Y-m-d-His');
                $extension = $file->getClientOriginalExtension();
                $filename = $timestamp . '_' . $file->getClientOriginalName();
                $file->storeAs('public/products', $filename);

                $productImage = new ProductImages(['filename' => $filename]);
                $productImage->product_id = $response->id;
                $productImage->save();
            }
        }

        return true;
    }

    public function jsonProductDetail($request)
    {
        $data['detail'] = Product::with('images','category')->where('id', $request->id)->first();
        // $data['category'] = Category::where('id',$data['detail']['category_id'])->first();
        $data['productImage'] = [];
        foreach ($data['detail']->images as $image) {
            $data['productImage'][] = $image->filename;
        }
        return $data;
    }

    public function productCategory()
    {
        $productsByCategory = Product::with(['images','category'=> function($query){
            $query->orderBy('created_at', 'desc');
        }])
        ->get()
        ->groupBy('category.category_name');
        return $productsByCategory;
    }
    public function singleProductDetail($id)
    {
        $productsByCategory = Product::with('images','category')
        ->where('id',$id)->first();
        // dd($productsByCategory);
        return $productsByCategory;
    }

}
