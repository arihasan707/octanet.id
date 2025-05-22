<?php

namespace App\Http\Controllers\Agen;

use App\Models\Bank;
use App\Models\Client;
use App\Models\Komisi;
use App\Models\Pencairan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Null_;
use RealRashid\SweetAlert\Facades\Alert;

use function PHPUnit\Framework\isEmpty;

class PencairanDanaController extends Controller
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
        // Carbon::setTestNow(Carbon::create(2025, 5, 1));
        $komisi = Komisi::where('user_id', $this->user)->get();
        // dd($komisi);
        // $isConfirm =  Komisi::where('user_id', $this->user)->where('is_confirm', 0)->first();
        $jmlDanaCair = $komisi->sum('komisi');
        $data = Pencairan::with('bank', 'user')->where('user_id', $this->user)->orderBy('id', 'desc')->get();
        return view('agen.pencairan-dana.index', compact('jmlDanaCair', 'data', 'komisi'));
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
        $namaBank = Bank::where('user_id', $this->user)->first();
        Pencairan::create([
            'user_id' => $this->user,
            'bank_id' => $namaBank->id,
            'jml_pencairan' => $request->jmlDanaCair,
        ]);

        Alert::alert('Berhasil', 'pencairan dana komisi kamu sedang di proses', 'success');
        return redirect()->route('agen.pencairanDana');
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
        //
    }
}
