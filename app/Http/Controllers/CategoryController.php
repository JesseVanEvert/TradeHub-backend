<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    
    public function storeCategory(Request $request)
    {
        $category = Category::create($request->all());

        return response()->json($category, 201);
    }

    public function showAllCategories()
    {
        $categories = Category::all();

        return response()->json($categories, 200);
    }
}
