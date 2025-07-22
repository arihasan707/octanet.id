<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeagenanController extends Controller
{
    public function index()
    {
        $provinsi = DB::table('province')->get();
        return view('info-keagenan', compact('provinsi'));
    }
}
