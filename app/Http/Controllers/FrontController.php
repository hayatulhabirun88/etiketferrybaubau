<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.index');
    }

    public function pesan_tiket()
    {

        return view('front.pesan_tiket');
    }

    public function tiket_list()
    {
        return view('front.tiket_list');
    }
}
