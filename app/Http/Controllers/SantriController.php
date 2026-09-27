<?php

namespace App\Http\Controllers;

use App\Models\Santri;

class SantriController extends Controller
{
    public function index()
    {
        $santris = Santri::all();

        return view('santri.index', compact('santris'));
    }
}