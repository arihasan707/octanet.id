<?php

namespace App\Http\Controllers\Agen;

use App\Models\Area;
use App\Models\Client;
use App\Models\Payment;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;
use Intervention\Image\Drivers\Gd\Driver;


class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $user;
    protected $manager;

    public function __construct()
    {
        $this->user = Auth::user()->id;
        $this->manager = new ImageManager(
            new Driver()
        );
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $pelanggan = Client::with('product')->where('user_id', $this->user)->latest();

            return DataTables::eloquent($pelanggan)
                ->addIndexColumn()
                ->addColumn('product', function ($row) {
                    return $row->Product->Kategori->nama . ' - ' .  $row->Product->nama;
                })
                ->addColumn('action', function ($row) {


                    if ($row->status === 'proses') {
                        return "<button type='button' data-bs-toggle='modal'
                                data-bs-target='#viewPelangganModal" . $row->id . "'
                                class='w-32-px h-32-px bg-primary rounded-circle d-inline-flex text-white align-items-center justify-content-center'>
                                <iconify-icon icon='iconamoon:eye-light'></iconify-icon>
                                 </button>";
                    }
                    return "<div class='flex gap-1'>
                            <button data-id=" . $row->id . " type='button' data-bs-toggle='modal'
                                data-bs-target='#historiPembayaranModal'
                                class='w-32-px h-32-px bg-primary open-modal rounded-circle d-inline-flex text-white align-items-center justify-content-center'>
                                <iconify-icon icon='tabler:report-money'></iconify-icon>
                            </button></div>
                            ";
                })
                ->addColumn('status', function ($row) {
                    switch ($row->status) {
                        case 'aktif':
                            return "<span class='badge text-[3px] fw-semibold rounded-pill bg-success px-20 py-6 radius-4 text-white'>" . $row->status . "</span>";
                            break;
                        case 'berhenti':
                            return "<span class='badge text-[3px] fw-semibold rounded-pill bg-secondary px-20 py-6 radius-4 text-white'>" . $row->status . "</span>";
                            break;
                        case 'terblokir':
                            return "<span class='badge text-[3px] fw-semibold rounded-pill bg-danger px-20 py-6 radius-4 text-white'>" . $row->status . "</span>";
                            break;
                        default:
                            return "<span class='badge text-[3px] fw-semibold rounded-pill bg-warning-600 px-20 py-6 radius-4 text-white'>" . $row->status . "</span>";
                            break;
                    }
                })
                ->rawColumns(['action', 'status', 'product'])
                ->toJson();
        }

        $layanans = Product::with('kategori')->get();
        $areas =  Area::all();
        $data = Client::with('product')->where('user_id', $this->user)->orderBy('id', 'desc')->get();
        return view('agen.pelanggan.index', compact('data', 'layanans', 'areas'));
    }

    public function getHistori(String $id)
    {

        $histori = Payment::with('client.product.kategori')->where('client_id', $id)->orderBy('id', 'desc');
        return DataTables::eloquent($histori)
            ->addIndexColumn()
            ->addColumn('priode', function ($row) {
                return Carbon::parse($row->start_date)->format('d F Y')    . ' - ' .  Carbon::parse($row->end_date)->format('d F Y');
            })
            ->addColumn('layanan', function ($row) {
                return $row->Client->Product->Kategori->nama . ' - ' . $row->Client->Product->nama;
            })
            ->addColumn('status', function ($row) {
                switch ($row->status) {
                    case 'paid':
                        return "<span class='badge text-[3px] fw-semibold rounded-pill bg-success px-20 py-6 radius-4 text-white'>Lunas</span>";
                        break;
                    default:
                        return "<span class='badge text-[3px] fw-semibold rounded-pill bg-secondary px-20 py-6 radius-4 text-white'>Belum Bayar</span>";
                        break;
                }
            })
            ->addColumn('amount', function ($row) {
                return formatRupiah($row->amount);
            })
            ->rawColumns(['status', 'priode', 'layanan', 'amount'])
            ->toJson();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function cekNik(Request $request)
    {
        $exists = Client::where('nik', $request->nik)->exists();
        return response()->json(!$exists);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        if ($request->hasFile('imgRumah')) {
            $upload = $request->file('imgRumah');

            //resize gambar
            $image = $this->manager->read($upload);

            $imageName = time() . '.' . $upload->getClientOriginalExtension();
            $thumbImage =  $image->encodeByExtension($upload->getClientOriginalExtension(), quality: 22);

            Storage::disk('public')->put($imageName, $thumbImage);
        }

        Client::create([
            'user_id' => $this->user,
            'produk_id' => $request->layanan,
            'area_id' => $request->area,
            'nama' =>  $request->nama,
            'nik' =>  $request->nik,
            'email' => $request->email,
            'tgl_lahir' =>  $request->tglLahir,
            'no_hp1' => $request->noHp1,
            'no_hp2' => $request->noHp2 ?? '-',
            'tgl_pasang' => $request->waktu,
            'alamat' => $request->alamat,
            'long' => $request->long,
            'lat' => $request->lat,
            'img' => $imageName,
        ]);

        Alert::alert('Berhasil', 'Data pelanggan baru telah di tambah', 'success');
        return redirect()->route('agen.pelanggan');
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
        $layanans = Product::with('kategori')->get();
        $areas =  Area::all();
        $client = Client::where('user_id', $this->user)->where('id', $id)->first();
        return view('agen.pelanggan.edit', compact('client', 'layanans', 'areas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $client =  Client::where('user_id', $this->user)->where('id', $id)->first();

        if ($request->hasFile('imgRumah')) {

            $filePath = storage_path('app/public/' . $client->img);
            if (file_exists($filePath)) {
                unlink($filePath);
            }

            $upload = $request->file('imgRumah');

            //resize gambar
            $image = $this->manager->read($upload);

            $imageName = time() . '.' . $upload->getClientOriginalExtension();
            $thumbImage =  $image->encodeByExtension($upload->getClientOriginalExtension(), quality: 22);

            Storage::disk('public')->put($imageName, $thumbImage);

            $client->update([
                'produk_id' => $request->layanan,
                'area_id' => $request->area,
                'nama' => $request->nama,
                'email' => $request->email,
                'tgl_lahir' => $request->tglLahir,
                'no_hp1' => $request->noHp1,
                'no_hp2' => $request->noHp2 ?? '-',
                'tgl_pasang' => $request->waktu,
                'alamat' => $request->alamat,
                'long' => $request->long,
                'lat' => $request->lat,
                'img' => $imageName,
            ]);

            Alert::alert('Berhasil', 'Data pelanggan telah di edit', 'success');
            return redirect()->route('agen.pelanggan.edit', $id);
        }

        $client->update([
            'produk_id' => $request->layanan,
            'area_id' => $request->area,
            'nama' => $request->nama,
            'email' => $request->email,
            'tgl_lahir' => $request->tglLahir,
            'no_hp1' => $request->noHp1,
            'no_hp2' => $request->noHp2 ?? '-',
            'tgl_pasang' => $request->waktu,
            'alamat' => $request->alamat,
            'long' => $request->long,
            'lat' => $request->lat,
        ]);

        Alert::alert('Berhasil', 'Data pelanggan telah di edit', 'success');
        return redirect()->route('agen.pelanggan.edit', $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
