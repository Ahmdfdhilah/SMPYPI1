<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kepsek;
use Illuminate\Support\Facades\Storage;

class KepsekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kepseks = Kepsek::all();

        return view('admin.kepsek.index', compact('kepseks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kepsek.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kepsek_name' => 'required',
            'kepsek_welcome' => 'required',
            'kepsek_date' => 'required|date',
            'kepsek_history' => 'required',
            'kepsek_img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $input = $request->all();

        if ($image = $request->file('kepsek_img')) {
            $destinationPath = 'image/';
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['kepsek_img'] = $destinationPath . $imageName;
        }

        Kepsek::create($input);

        return redirect('/admin/kepsek')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kepsek $kepsek)
    {
        return view('admin.kepsek.edit', compact('kepsek'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kepsek $kepsek)
    {
        $request->validate([
            'kepsek_name' => 'required',
            'kepsek_welcome' => 'required',
            'kepsek_date' => 'required|date',
            'kepsek_history' => 'required',
            'kepsek_img' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $input = $request->all();

        if ($image = $request->file('kepsek_img')) {
            $destinationPath = 'image/';
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['kepsek_img'] = $destinationPath . $imageName;
            $filePathToDelete = str_replace('\\', '/', public_path()) .'/'. $kepsek->kepsek_img;
            if (file_exists($filePathToDelete)) {
                @unlink($filePathToDelete);
            }
        } else {
            unset($input['kepsek_img']);
        }

        $kepsek->update($input);

        return redirect('/admin/kepsek')->with('message', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kepsek $kepsek)
    {
        $filePathToDelete = str_replace('\\', '/', public_path()) .'/'. $kepsek->kepsek_img;
        if (file_exists($filePathToDelete)) {
            @unlink($filePathToDelete);
        }
        $kepsek->delete();

        return redirect('/admin/kepsek')->with('message', 'Data berhasil dihapus');
    }
}
