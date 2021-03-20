<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{

    public function index()
    {
        $service = Service::all();
        return response()->json($service, 200);
    }
    public function addService(Request $request)
    {
        
        try {
            $service = new Service();
            $service = $request->validate([
                'name' => 'required',
                'description' => 'required'
            ]);
            Service::insert([
                'name' => $request->name,
                'description' => $request->description,
                'category_id' => $request->category_id
            ]);
            return response()->json([
              "message" => "Service created"
            ], 201);


        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
