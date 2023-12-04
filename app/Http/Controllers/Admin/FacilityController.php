<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Facility;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $facilities = Facility::all();

        return view('admin.facility.index', compact('facilities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.facility.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'facilities_name' => 'required',
            'facilities_desc' => 'required',
            'facilities_total' => 'required',
            'facilities_img' => 'required|image'
        ]);

        $input = $request->all();

        if ($image = $request->file('facilities_img')) {
            $destinationPath = 'image/';
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['facilities_img'] = $imageName;
        }

        Facility::create($input);

        return redirect('/admin/facilities')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Facility $facility)
    {
        return view('admin.facility.edit', compact('facility'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Facility $facility)
    {
        $request->validate([
            'facilities_name' => 'required',
            'facilities_desc' => 'required',
            'facilities_total' => 'required',
            'facilities_img' => 'image'
        ]);

        $input = $request->all();

        if ($image = $request->file('facilities_img')) {
            $destinationPath = 'image/';
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['facilities_img'] = $imageName;
            $filePathToDelete = str_replace('\\', '/', public_path()) .'/'. $facility->facilities_img;
            if (file_exists($filePathToDelete)) {
                @unlink($filePathToDelete);
            }
        } else {
            unset($input['facilities_img']);
        }

        $facility->update($input);

        return redirect('/admin/facilities')->with('message', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Facility $facility)
    {
        $filePathToDelete = str_replace('\\', '/', public_path()) .'/'. $facility->facilities_img;
        if (file_exists($filePathToDelete)) {
            @unlink($filePathToDelete);
        }
        $facility->delete();

        return redirect('/admin/facilities')->with('message', 'Data berhasil dihapus');
    }
}
