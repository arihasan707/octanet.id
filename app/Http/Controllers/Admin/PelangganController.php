<?php

namespace App\Http\Controllers\Admin;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $pelanggan = Client::with('Product')
                ->where('status', '!=', 'proses')->latest();

            // Filter berdasarkan nama
            if ($request->filled('nama')) {
                $pelanggan->where('nama', 'like', '%' . $request->nama . '%');
            }

            // Filter berdasarkan status
            if ($request->filled('status')) {
                $pelanggan->where('status', $request->status);
            }

            return DataTables::eloquent($pelanggan)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    return  "
                            <button type='button' data-bs-toggle='modal'
                                data-bs-target='#editPelangganModal" . $row->id . "'
                                class='w-32-px h-32-px bg-warning rounded-circle d-inline-flex text-slite-900 align-items-center justify-content-center'>
                                <iconify-icon icon='lucide:edit'></iconify-icon>
                            </button>
                             <button type='button' data-bs-toggle='modal'
                                data-bs-target='#historiPembayaranModal" . $row->id . "'
                                class='w-32-px h-32-px bg-primary rounded-circle d-inline-flex text-white align-items-center justify-content-center'>
                                <iconify-icon icon='tabler:report-money'></iconify-icon>
                            </button>
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
                            return "<span class='badge text-[3px] fw-semibold rounded-pill bg-dark -600 px-20 py-6 radius-4 text-white'>" . $row->status . "</span>";
                            break;
                    }
                })
                ->addColumn('product', function ($row) {
                    return $row->Product->Kategori->nama . ' - ' .  $row->Product->nama;
                })
                ->rawColumns(['action', 'status', 'product'])
                ->toJson();
        }

        $data = Client::latest()->get();
        return view('admin.pelanggan.index', compact('data'));
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
        $pelanggan = Client::find($id);

        $pelanggan->status = $request->status;
        $pelanggan->save();

        Alert::alert('Berhasil', 'Status data pelanggan berhasil diperbaharui', 'success');
        return redirect()->route('admin.pelanggan');
    }

    public function download($filename)
    {
        $path = Storage::disk('public')->path($filename);

        return response()->download($path);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
