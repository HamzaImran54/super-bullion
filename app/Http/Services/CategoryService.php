<?php

namespace App\Http\Services;

use App\Models\Category;

class CategoryService {

    public function create($request)
    {
        $response = Category::create($request->validated());
        return $response;
    }

    public function update($request)
    {
        $data = Category::where('id', $request->categoryID)->first();
        if($data != null)
        {
           $data->category_name = $request->category_name;
           $data->save();
           return true;
        }
    }

    public function destroy($id)
    {
        $response = Category::findOrFail($id);
        $response->delete();
        return true;
    }

}
