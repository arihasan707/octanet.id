<?php

namespace App\Http\Controllers;

use App\Events\WaNotif;
use App\Models\Agen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Crypt;
use RealRashid\SweetAlert\Facades\Alert;

class KeagenanController extends Controller
{
    public function index(Request $request)
    {
        if ($request->query('regis')) {
            return view('info-keagenan');
        }

        $provinsi = DB::table('province')->get();

        return view('info-keagenan', compact('provinsi'));
    }

    public function store(Request $request)
    {
        Agen::create([
            'nama' => $request->name,
            'no_telp' => $request->no_telp,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'prov' => $request->prov
        ]);

        $param = Crypt::encrypt($request->all());

        $pesan = "Hallo *$request->name* salam octanet.\n\nSelangkah lagi untuk kamu bisa bergabung menjadi agen kami.\n\nSilahkan klik link dibawah untuk melengkapi data kamu.\n" . route('keagenan.daftar', ['regis' => $param]) . "\n\n_Ini adalah pesan otomatis - mohon untuk tidak membalas langsung ke pesan ini_
        ";

        event(new WaNotif($request->no_telp, $pesan));

        Alert::alert('Pendaftaran Berhasil', 'Terima kasih telah bergabung, Tim kami akan segera menghubungimu', 'success');
        return redirect('/info-keagenan?regis=' . $param . '#daftar-agen');
    }

    public function daftar(Request $request)
    {
        $param = Crypt::decrypt($request->query('regis'));
        $data = Agen::where('no_telp', $param['no_telp'])->first();
        return view('daftar-agen', compact('data'));
    }
}
