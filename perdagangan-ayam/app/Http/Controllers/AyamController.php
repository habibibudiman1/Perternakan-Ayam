<?php

namespace App\Http\Controllers;

use App\Models\Ayam;

class AyamController extends Controller
{
    /**
     * Menampilkan daftar ayam dari database.
     */
    public function index()
    {
        $ayams = Ayam::all();
        return view('ayam.index', compact('ayams'));
    }
}