<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\CategoryCreateRequest;
use App\Http\Services\CategoryService;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct(private CategoryService $categoryService){}

    public function index()
    {
        $category = Category::orderBy('created_at', 'desc')->get();
        return view('auth.dashboard.pages.categoey',compact('category'));
    }

    public function create(CategoryCreateRequest $request)
    {
        $response = $this->categoryService->create($request);
        if ($response)
        {
         return redirect()->back()->with('success',"Category Created Successfully");
        }
    }

    public function update(Request $request)
    {
        $response = $this->categoryService->update($request);
        if ($response)
        {
         return redirect()->back()->with('success',"Category Updated Successfully");
        }
    }

    public function destroy($id)
    {
        $response = $this->categoryService->destroy($id);
        return $response;
    }
}
