<?php

namespace App\Http\Controllers\Client;

use App\Models\Facility;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class ClientFacilityController extends Controller
{
    public function __invoke()
    {
        $facilities = Facility::all();       
        return view('client.tentang_kami.fasilitas.index', compact('facilities'));
    }
    public function show($id)
    {
        $facilities = Facility::findOrFail($id);
        return view('client.tentang_kami.fasilitas.show', compact('facilities'));
    }
}
