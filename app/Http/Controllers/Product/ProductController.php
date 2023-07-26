<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
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

}
