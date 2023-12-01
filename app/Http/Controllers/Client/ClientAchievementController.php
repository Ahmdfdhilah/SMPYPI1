<?php

namespace App\Http\Controllers\Client;

use App\Models\Achievement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class ClientAchievementController extends Controller
{
    public function __invoke()
    {
        $achievements = Achievement::all();       
        return view('client.kesiswaan.prestasi.index', compact('achievements'));
    }
    public function show($id)
    {
        $achievements = Achievement::findOrFail($id);
        return view('client.kesiswaan.prestasi.show', compact('achievements'));
    }
}
