<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategoris = Kategori::all();
        $data = Product::with('kategori')->select('id', 'nama', 'kecepatan', 'harga', 'kategori_id')->orderBy('created_at', 'desc')->get();
        return view('admin.product.index', compact('data', 'kategoris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */


    public function store(Request $request)
    {
        $harga = parseRupiah($request->harga);
        Product::create([
            'kategori_id' => $request->kategori,
            'nama' => $request->nama,
            'layanan' => $request->layanan,
            'kecepatan' => $request->kecepatan,
            'data_quota' => $request->data_quota,
            'akses_perangkat' => $request->akses_perangkat,
            'alat_wifi' => $request->alat_wifi,
            'biaya_pasang' => $request->biaya_pasang,
            'harga' => $harga,
        ]);

        Alert::alert('Berhasil', 'Data produk telah di tambahkan', 'success');
        return redirect()->route('admin.product');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        Alert::alert('Berhasil', 'Data berhasil di hapus', 'success');
        return redirect()->route('admin.product');
    }
}
