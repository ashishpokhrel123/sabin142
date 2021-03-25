<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function addMember(Request $request)
    {
        try {
            $member = $request->validate([
                'member_name' => 'required',
                'member_category' => 'required',
                'member_position' => 'required'
            ]);
            
            Member::insert($member);
            return redirect('/admin');


        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
