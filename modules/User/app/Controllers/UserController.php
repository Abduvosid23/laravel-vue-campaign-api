<?php

namespace Modules\User\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

//    public function __construct()
//    {
//        $this->middleware('auth')->only('dashboard');
//    }
//
//    public function dashboard()
//    {
//        $user = Auth::user();
//        return view('dashboard', compact('user'));
//    }

    public function welcome()
    {
        return view('welcome');
    }

}
