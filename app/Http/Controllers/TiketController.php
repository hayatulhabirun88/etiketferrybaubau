<?php

namespace App\Http\Controllers;

use App\Models\Tiket;
use Illuminate\Http\Request;

class TiketController extends Controller
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
        return view('tiket.tiketview');
    }

    public function pesan_tiket()
    {
        return view('tiket.pesan_tiket');
    }

    public function list()
    {
        return view('tiket.list');
    }

    public function cetak($id)
    {
        $tiket = Tiket::find($id);
        return view('tiket.cetak', compact('tiket'));
    }



}
