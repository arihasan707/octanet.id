<?php

namespace App\Http\Controllers\Admin;

use App\Models\Client;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class PermintaanPelangganBaruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Client::with('product', 'user', 'area')->where('status', 'proses')->orderBy('created_at', 'desc')->get();
        return view('admin.permintaan.pelanggan', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pelanggan = Client::where('user_id', $request->user)->where('id', $id)->first();
        if ($request->konfirm === '1') {
            $pelanggan->status = 'aktif';
            $pelanggan->save();

            Payment::create([
                'client_id' => $pelanggan->id,
                'user_id' => $pelanggan->user_id,
                'start_date' => $pelanggan->tgl_pasang,
                'end_date' =>  Carbon::parse($pelanggan->tgl_pasang)->addMonths(),
                'amount' => $pelanggan->Product->harga,
                'status' => 'paid'
            ]);

            Payment::create([
                'client_id' => $pelanggan->id,
                'user_id' => $pelanggan->user_id,
                'start_date' => Carbon::parse($pelanggan->tgl_pasang)->addMonths(),
                'end_date' =>  Carbon::parse($pelanggan->tgl_pasang)->addMonths(2),
                'amount' => $pelanggan->Product->harga,
                'status' => 'unpaid'
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Pelanggan telah aktif berlangganan'
            ], 200);
        }

        $pelanggan->status = 'ditolak';
        $pelanggan->save();
        return response()->json([
            'status' => true,
            'message' => 'Pelanggan ditolak'
        ], 200);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
