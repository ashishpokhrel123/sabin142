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
               'service_category' => 'required'
           ]);
           
           Category::insert([
               'name' => $request->service_category,
           ]);
           return redirect('/admin');
       } catch (\Throwable $e) {
           dd($e);
           
       }
    }
}
