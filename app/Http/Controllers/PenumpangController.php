<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenumpangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('penumpang.penumpangindex');
    }
}
