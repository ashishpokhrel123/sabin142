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
                'add_service' => $request->name,
                'service_description' => $request->description,
                'service_category' => $request->category_id
            ]);
            return redirect('/admin');


        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
