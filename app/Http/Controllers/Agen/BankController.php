<?php

namespace App\Http\Controllers\Agen;

use App\Models\Bank;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $user;

    public function __construct()
    {
        $this->user = Auth::user()->id;
    }

    public function index()
    {
        $data = Bank::where('user_id', $this->user)->first();
        return view('agen.bank.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('agen.bank.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $bank = new Bank();
        $bank->user_id = $this->user;
        $bank->nama = $request->nama;
        $bank->atas_nama = $request->an_bank;
        $bank->no_rek = $request->no_rek;
        $bank->save();

        Alert::success('Berhasil', 'Data bank telah ditambahkan');
        return redirect()->route('agen.bank');
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
    public function edit(string $id) {}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $bank = Bank::find($id);
        $bank->update([
            'nama' => $request->nama,
            'atas_nama' => $request->an_bank,
            'no_rek' => $request->no_rek
        ]);

        Alert::alert('Berhasil', 'Data bank telah diubah', 'success');
        return redirect()->route('agen.bank');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
