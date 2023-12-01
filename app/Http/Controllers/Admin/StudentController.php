<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Students;
class StudentController extends Controller
{
    public function index()
    {
        $students = Students::all();
    
        return view('admin.students.index', compact('students'));
    }
    
    public function create()
    {
        return view('admin.students.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'student_total' => 'required',
            'student_tahun_ajaran' => 'required',
        ]);
    
        Students::create($request->all());
    
        return redirect('/admin/students')->with('message', 'Data berhasil ditambahkan');
    }
    
    public function edit(Students $student)
    {
        return view('admin.students.edit', compact('student'));
    }
    
    public function update(Request $request, Students $student)
    {
        $request->validate([
            'student_total' => 'required',
            'student_tahun_ajaran' => 'required',
        ]);
    
        $student->update($request->all());
    
        return redirect('/admin/students')->with('message', 'Data berhasil diperbarui');
    }
    
    public function destroy(Students $student)
    {
        $student->delete();
    
        return redirect('/admin/students')->with('message', 'Data berhasil dihapus');
    }
}
