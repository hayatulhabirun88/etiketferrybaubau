<?php

namespace App\Http\Controllers\Api;

use App\Models\Tiket;
use App\Models\Pelabuhan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QrCodeApiController extends Controller
{
    public function scan(Request $request)
    {
        // Mencari tiket berdasarkan kode tiket
        $tiket = Tiket::where('kode_tiket', $request->kode_tiket)->first();

        // Mengecek apakah tiket ditemukan
        if ($tiket) {
            // Jika ditemukan, kembalikan data tiket sebagai respons JSON
            $tiket['penumpang'] = $tiket->penumpang;
            $tiket['keberangkatan'] = $tiket->keberangkatan;
            $tiket['kapal'] = $tiket->keberangkatan->kapal;
            $tiket['berangkat'] = Pelabuhan::find($tiket->keberangkatan->berangkat)->nama_pelabuhan;
            $tiket['tujuan'] = Pelabuhan::find($tiket->keberangkatan->tujuan)->nama_pelabuhan;
            return response()->json([
                'status' => true,
                'data' => $tiket,
            ], 200);
        } else {
            // Jika tidak ditemukan, kembalikan pesan kesalahan
            return response()->json([
                'status' => false,
                'message' => 'Tiket tidak ditemukan.',
            ], 404); // Kode status 404 untuk tidak ditemukan
        }
    }
}
