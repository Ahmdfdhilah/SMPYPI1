<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Achievement;
use App\Models\Eskul;
use App\Models\Facility;
use App\Models\Employee;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __invoke()
    {
        $achievements = Achievement::all();
        $eskuls = Eskul::all();
        $facilities = Facility::all();
        $totalStudent = Student::sum('student_total');
        $totalGuru = Employee::where('employee_type', 'guru')->count();
        $totalKelas = Facility::where('facilities_name', 'kelas')->sum('facilities_total');
        $employees = Employee::all();
        $pengumuman = DB::table('publications')
            ->where('publication_type', 'like', "pengumuman")->latest()->take(3)->get();
        $blog = DB::table('publications')
            ->where('publication_type', 'like', "blog")->latest()->take(3)->get();

        return view('welcome', compact(
            'achievements',
            'eskuls',
            'facilities',
            'employees',
            'pengumuman',
            'blog',
            'totalStudent',
            'totalGuru',
            'totalKelas',
        )
        );
    }
}
