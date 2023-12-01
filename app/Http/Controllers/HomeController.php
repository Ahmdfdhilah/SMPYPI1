<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Achievement;
use App\Models\Extracurricular;
use App\Models\Facility;
use App\Models\Employees;
use App\Models\Students;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __invoke()
    {
        $achievements = Achievement::all();
        $eskuls = Extracurricular::all();
        $facilities = Facility::all();
        $totalStudent = Students::sum('student_total');
        $totalGuru = Employees::where('employee_type', 'guru')->count();
        $totalKelas = Facility::where('facilities_name', 'kelas')->sum('facilities_total');
        $employees = Employees::all();
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
