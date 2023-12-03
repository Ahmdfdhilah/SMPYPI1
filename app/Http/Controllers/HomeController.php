<?php

namespace App\Http\Controllers;

use App\Models\Kepsek;
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
        $kepsek = Kepsek::latest()->first();
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
            'kepsek',
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
