<?php

namespace App\Http\Controllers\Client;

use App\Models\Kepsek;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;

class ClientSejarahController extends Controller
{
    public function __invoke()
    {
        $kepsek = Kepsek::all();  
        foreach ($kepsek as $data) {
            $data->kepsek_date = Carbon::parse($data->kepsek_date)->format('F, d Y');
        }     
        return view('client.tentang_kami.sejarah.index', compact('kepsek'));
    }
}
