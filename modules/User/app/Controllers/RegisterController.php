<?php

namespace Modules\User\Controllers;

use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register');
    }
}
