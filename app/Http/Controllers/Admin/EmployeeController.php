<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employees;
use Illuminate\Support\Facades\Storage;
class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employees::all();
    
        return view('admin.employees.index', compact('employees'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.employees.create');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'employee_name' => 'required',
            'employee_type' => 'required',
            'employee_position' => 'required',
            'employee_img' => 'required|image'
        ]);
    
        $input = $request->all();
    
        if ($image = $request->file('employee_img')) {
            $destinationPath = 'image/';
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['employee_img'] = $imageName;
        }
    
        Employees::create($input);
    
        return redirect('/admin/employees')->with('message', 'Data berhasil ditambahkan');
    }
    
    /**
     * Display the specified resource.
     */
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employees $employee)
    {
        return view('admin.employees.edit', compact('employee'));
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employees $employee)
    {
        $request->validate([
            'employee_name' => 'required',
            'employee_type' => 'required',
            'employee_position' => 'required',
            'employee_img' => 'image'
        ]);
    
        $input = $request->all();
    
        if ($image = $request->file('employee_img')) {
            $destinationPath = 'image/';
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['employee_img'] = $imageName;
            @unlink(public_path("image\\" . $employee->employee_img));
        } else {
            unset($input['employee_img']);
        }
    
        $employee->update($input);
    
        return redirect('/admin/employees')->with('message', 'Data berhasil diperbarui');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employees $employee)
    {
        @unlink(public_path("image\\" . $employee->employee_img));
        $employee->delete();
    
        return redirect('/admin/employees')->with('message', 'Data berhasil dihapus');
    }
}
