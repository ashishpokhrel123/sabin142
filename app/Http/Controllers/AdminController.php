<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class AdminController extends Controller
{
    public function adminPanel()
    {
         return view('admin.admindasboard');
    }
    public function addAbout(Request $request)
    {
        return view('admin.addAbout');
    }
    public function addService(Request $request)
    {
        $category = Category::all();
        return view('admin.addService', compact('category'));
    }
    public function addMember(Request $request)
    {
        
        return view('admin.addMember');
    }

    public function addsubCategory(Request $request)
    {
        return view('admin.addservicecategory');
    }
}
