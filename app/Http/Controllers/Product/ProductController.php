<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\ProductCreateRequest;
use App\Http\Requests\Product\UpdateProductRequest;
use App\Http\Services\ProductService;
use App\Models\Product;
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
        $data = $this->productService->productList();
        return view('auth.dashboard.pages.product-list',compact('data'));
    }

    public function specificProductList($id)
    {
        $data = $this->productService->specificProductList($id);
        return view('auth.dashboard.pages.product-detail',compact('data'));
    }

    public function delete($id)
    {
        $response = $this->productService->delete($id);
        if($response == true)
        {
            return true;
        }else{
            return false;
        }
    }

    public function edit($id)
    {
        $response = $this->productService->specificProductList($id);
        return view('auth.dashboard.pages.update-product',compact('response'));

    }

    public function update(UpdateProductRequest $request)
    {
        $response = $this->productService->update($request);
        return redirect()->back()->with('success','Product Updated Successfully');
    }

    public function JsonProductDetail(Request $request)
    {
        $response = $this->productService->jsonProductDetail($request);
        return response()->json($response);
    }

    public function productCategory()
    {
        $response = $this->productService->productCategory();
        return view('user.Pages.Product',compact('response'));
    }
    public function singleProductDetail($id)
    {
        $response = $this->productService->singleProductDetail($id);
        $relatedData = Product::with('images','category')
        ->where('category_id',$response->category_id)->orderBy('created_at','desc')->limit(4)->get();
        // dd($relatedData);
        return view('user.Pages.SinglePage',compact('response','relatedData'));
    }

}
