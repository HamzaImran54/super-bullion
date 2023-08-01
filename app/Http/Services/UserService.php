<?php

namespace App\Http\Services;

use App\Models\Product;

class UserService {


    public function index()
    {
        $data = Product::with('images')->orderBy('created_at', 'desc')->take(12)->get();
        // dd($data);
        return $data;
    }


}

