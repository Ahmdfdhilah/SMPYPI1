<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Extracurricular;
use Illuminate\Http\Request;

class ExtracurricularController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $extracurriculars = Extracurricular::all();

        return view('admin.extracurricular.index', compact('extracurriculars') );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.extracurricular.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'eskul_name' => 'required',
            'eskul_desc' => 'required',
            'eskul_img' => 'required|image'
        ]);

        $input = $request->all();

        if ($image = $request->file('eskul_img')) {
            $destinationPath = 'image/';
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['eskul_img'] = $imageName;
        }

        Extracurricular::create($input);

        return redirect('/admin/extracurriculars') -> with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Extracurricular $extracurricular)
    {
        return view('admin.extracurricular.edit', compact('extracurricular'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Extracurricular $extracurricular)
    {
        $request->validate([
            'eskul_name' => 'required',
            'eskul_desc' => 'required',
            'eskul_img' => 'image'
        ]);

        $input = $request->all();

        if ($image = $request->file('eskul_img')) {
            $destinationPath = 'image/';
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['eskul_img'] = $imageName;
        } else {
            unset($input['eskul_img']);
        }


        $extracurricular->update($input);

        return redirect('/admin/extracurriculars') -> with('message', 'Data berhasil diperbarui');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Extracurricular $extracurricular)
    {
        $extracurricular->delete();

        return redirect('/admin/extracurriculars') -> with('message', 'Data berhasil dihapus');
    }
}
