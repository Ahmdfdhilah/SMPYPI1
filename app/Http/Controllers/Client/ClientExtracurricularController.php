<?php

namespace App\Http\Controllers\Client;

use App\Models\Extracurricular;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class ClientExtracurricularController extends Controller
{
    public function __invoke()
    {
        $eskuls = Extracurricular::all();       
        return view('client.kesiswaan.eskul.index', compact('eskuls'));
    }
    public function show($id)
    {
        $eskuls = Extracurricular::findOrFail($id);
        return view('client.kesiswaan.eskul.show', compact('eskuls'));
    }
}
