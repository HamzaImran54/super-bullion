<?php

namespace App\Http\Services;

use App\Models\Category;

class ProductService {

    public function index()
    {
        $category = Category::all();
        return $category;
    }

}
