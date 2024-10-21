<?php

namespace App\Livewire\Front;

use Midtrans\Config;
use App\Models\Kapal;
use Livewire\Component;
use App\Models\Pelabuhan;

class TiketList extends Component
{
    public function render()
    {
        // Inisialisasi Midtrans
        Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        Config::$isProduction = config('MIDTRANS_IS_PRODUCTION');
        Config::$isSanitized = true;
        Config::$is3ds = true;

        // Contoh data transaksi
        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => session()->get('total_harga'),
            ),
            'customer_details' => array(
                'first_name' => session()->get('penumpang')['nama_penumpang'],
                'last_name' => '',
                'email' => session()->get('user')['email'],
                'phone' => session()->get('penumpang')['email'] ?? "",
            ),
            'item_details' => array(
                array(
                    'id' => rand(),
                    'price' => session()->get('total_harga'),
                    'quantity' => 1,
                    'name' => "Pemesanan Tiket " . Kapal::find(session()->get('keberangkatan')['kapal_id'])->nama_kapal . " " . Pelabuhan::find(session()->get('keberangkatan')['berangkat'])->nama_pelabuhan . "-" . Pelabuhan::find(session()->get('keberangkatan')['tujuan'])->nama_pelabuhan,
                ),
            ),
        );

        // Buat pembayaran baru
        $snapToken = \Midtrans\Snap::getSnapToken($params);

        return view('livewire.front.tiket-list', compact(['snapToken']));
    }
}
