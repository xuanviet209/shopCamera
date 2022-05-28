<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Customer;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $user = DB::table('users')->get();
        return view('backend.user.index',[
            'users' =>$user
        ]);
    }
    
}
