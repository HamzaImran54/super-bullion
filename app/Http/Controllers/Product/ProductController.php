<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\ProductCreateRequest;
use App\Http\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function __construct(private ProductService $productService){}

    public function index()
    {
        $response = $this->productService->index();
        return view('auth.dashboard.pages.add-product',compact('response'));
    }

    public function create(ProductCreateRequest $request)
    {
        $response = $this->productService->create($request);
        if ($response) {
            return redirect()->back()->with('success','Product Added Successfully');
        }
    }

    public function productList()
    {
        return view('auth.dashboard.pages.product-list');
    }

}
