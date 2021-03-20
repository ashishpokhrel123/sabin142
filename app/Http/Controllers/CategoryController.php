<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function  index()
    {
        $category = Category::all();
        return response()->json($category, 200);

    }
    public function addCategory(Request $request)
    {
       try {
           $category = $request->validate([
               'name' => 'required'
           ]);
           Category::insert($category);
           return response()->json([
              "message" => "Category created"
            ], 201);
       } catch (\Throwable $e) {
           dd($e);
           
       }
    }
}
