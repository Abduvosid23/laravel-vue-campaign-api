<?php

namespace Modules\User\Controllers;

use App\Http\Controllers\Controller;


class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }
}
