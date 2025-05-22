<?php

namespace App\Services;

use App\Models\User;
use App\Models\Client;
use App\Models\Komisi;
use App\Models\Payment;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;

class Tes
{
    public function __invoke()
    {
        try {
            //komisi
            Carbon::setTestNow(Carbon::create(2025, 6, 16));
            $bulan = Carbon::now();
            $users = User::with('client')->where('roles', 'agen')->get();
            foreach ($users as $user) {
                $aktifClients = $user->Client()->where('status', 'aktif')
                    ->whereHas('Payment', function ($query) use ($bulan) {
                        $query->where('status', 'paid')
                            ->where('end_date', $bulan);
                    })
                    ->get();

                foreach ($aktifClients as $client) {

                    $komisi = $client->Area->komisi_per_area;
                    Komisi::Create([
                        'user_id' => $user->id,
                        'client_id' => $client->id,
                        'komisi' => $komisi,
                        'date' => $bulan,
                        'is_aktif' => 0,
                    ]);
                }
            }

            //cek status pembayaran h-5
            // $dueDate = Carbon::now();
            // $pelanggans = Client::with('user', 'payment')->where('status', 'aktif')
            //     ->whereHas('payment', function ($query) use ($dueDate) {
            //         $query->where('status', 'unpaid')->where('start_date', Carbon::parse($dueDate)->addDays(5));
            //     })->get();

            // log::info($pelanggans);

            //suspend
            // $pelanggan = Client::with('payment')->get();
            // foreach ($pelanggan as $row) {

            //     $belumBayar = $row->Payment()
            //         ->where('status', 'unpaid')
            //         ->whereDate('start_date', '<', $bulan)
            //         ->exists();

            //     if ($belumBayar) {
            //         $row->update(['status' => 'terblokir']);
            //     }
            // }
        } catch (\Exception $e) {
            Log::error("kesalahan", $e);
        }
    }
}
