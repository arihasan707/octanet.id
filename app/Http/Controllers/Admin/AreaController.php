<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Area;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Area::select('nama', 'kode_pos', 'komisi_per_area')->orderBy('created_at', 'desc')->get();
        return view('admin.area.index', compact('data'));
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
        //parse string to number only
        $komisi = parseRupiah($request->komisi);

        Area::create([
            'nama' => $request->nama,
            'kode_pos' => $request->kode_pos,
            'komisi_per_area' => $komisi,
        ]);
        Alert::alert('Berhasil', 'Data area telah ditambahkan', 'success');
        return redirect()->route('admin.area');
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
        $area = Area::find($id);
        $area->nama = $request->nama;
        $area->kode_pos = $request->kode_pos;
        $area->komisi_per_area = $request->komisi_per_area;
        $area->save();

        Alert::alert('Berhasil', 'data area telah di perbaharui', 'success');
        return redirect()->route('admin.area');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
