<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Scholarships;

class ScholarshipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $scholarships = Scholarships::all();

        return view('admin.scholarships.index', compact('scholarships'));
    }

    public function create()
    {
        return view('admin.scholarships.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'scholarship_name' => 'required',
            'scholarship_desc' => 'required',
            'scholarship_condition' => 'required',
        ]);

        $input = $request->all();

        Scholarships::create($input);

        return redirect('/admin/scholarships')->with('message', 'Data berhasil ditambahkan');
    }

    public function edit(Scholarships $scholarship)
    {
        return view('admin.scholarships.edit', compact('scholarship'));
    }

    public function update(Request $request, Scholarships $scholarship)
    {
        $request->validate([
            'scholarship_name' => 'required',
            'scholarship_desc' => 'required',
            'scholarship_condition' => 'required',
        ]);

        $input = $request->all();

        $scholarship->update($input);

        return redirect('/admin/scholarships')->with('message', 'Data berhasil diperbarui');
    }

    public function destroy(Scholarships $scholarship)
    {
        $scholarship->delete();

        return redirect('/admin/scholarships')->with('message', 'Data berhasil dihapus');
    }
}
