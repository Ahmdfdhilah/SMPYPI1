<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Scholarships;

class ClientScholarshipController extends Controller
{
    public function __invoke()
    {
        $scholarships = Scholarships::all();       
        return view('client.kesiswaan.beasiswa.index', compact('scholarships'));
    }
    public function deskripsi($id)
    {
        $scholarship = Scholarships::findOrFail($id);
        return view('client.kesiswaan.beasiswa.deskripsi', compact('scholarship'));
    }

    public function syarat($id)
    {
        $scholarship = Scholarships::findOrFail($id);
        return view('client.kesiswaan.beasiswa.syarat', compact('scholarship'));
    }
}
