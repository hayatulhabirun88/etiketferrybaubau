<?php

namespace App\Http\Controllers\Mobile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginMobileController extends Controller
{
    public function index()
    {
        return view('mobile.login');
    }


    public function logout()
    {
        auth()->logout();
        return redirect()->to('/m/login');
    }
}
