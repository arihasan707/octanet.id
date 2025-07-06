<?php

namespace App\Http\Controllers\Admin;

use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;
use RealRashid\SweetAlert\Facades\Alert;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $manager;

    public function __construct()
    {
        $this->manager = new ImageManager(
            new Driver()
        );
    }

    public function index()
    {
        $data = Banner::latest()->get();
        return view('admin.banner.index', compact('data'));
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

        foreach ($request->file('img') as $key => $value) {
            $folder = "images/$key";
            # code...
            //resize gambar
            $image = $this->manager->read($value);

            $imageName = time() . '.' . $value->getClientOriginalExtension();
            $thumbImage =  $image->encodeByExtension($value->getClientOriginalExtension(), quality: 50);

            Storage::disk('public')->put("$folder/$imageName", $thumbImage);
        }

        Banner::create([
            'img_desktop' => $imageName,
            'img_mobile' => $imageName,
            'link' => $request->link
        ]);

        Alert::alert('Berhasil', 'Data Banner telah ditambah', 'success');
        return redirect()->route('admin.banner');
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
