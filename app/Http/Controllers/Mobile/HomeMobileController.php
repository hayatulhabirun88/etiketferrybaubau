<?php

namespace App\Http\Controllers\Mobile;

use App\Models\Tiket;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeMobileController extends Controller
{
    public function index()
    {
        return view('mobile.dashboard');
    }

    public function ajax_tiket(Request $request)
    {


        $tiket = Tiket::where('kode_tiket', $request->kode_tiket)->first();

        if (!$tiket) {
            return response()->json([
                'status' => 'error',
                'message' => 'Kode Tiket Tidak Ditemukan',
                'html' => '<div class="alert alert-danger">Kode Tidak Ditemukan</div>'
            ]);
        } else {
            $data = [
                'html' => view('mobile.result', compact('tiket'))->render(),
                'status' => 'success'
            ];

            return response()->json($data);
        }

    }
}
