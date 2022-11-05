<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class HomeController extends Controller
{
    //

    public function redirect()
    {
        $usetype = Auth::user()->usertype;

        if($usetype == '1')
        {
            return view('admin.home');
        }
        else
        {
            return view('dashboard');
        }
    }
}
