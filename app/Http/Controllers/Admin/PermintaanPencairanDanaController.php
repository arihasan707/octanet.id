<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Komisi;
use App\Models\Pencairan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PermintaanPencairanDanaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = Pencairan::with('user', 'bank')->where('status', 'proses')->get();
        return view('admin.permintaan.pencairan', compact('data'));
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
    public function update(Request $request, Pencairan $pencairan)
    {
        $pencairan = Pencairan::findOrFail($pencairan->id);
        $pencairan->status = 'sukses';
        $pencairan->save();


        Komisi::where('user_id', $pencairan->user_id)
            ->where('is_aktif', 0)
            ->update([
                'is_aktif' => 1,
            ]);

        Alert::alert('Berhasil', 'dana komisi telah dicairkan', 'success');
        return redirect()->route('admin.req.pencairan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
