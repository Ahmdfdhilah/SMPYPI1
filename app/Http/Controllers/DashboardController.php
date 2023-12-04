<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use App\Models\Kepsek;
use App\Models\News;
use App\Models\Achievement;
use App\Models\Extracurricular;
use App\Models\Facility;
use App\Models\Scholarships;
use App\Models\Students;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'newsCount' => News::count(),
            'achievementsCount' => Achievement::count(),
            'extracurricularsCount' => Extracurricular::count(),
            'facilitiesCount' => Facility::count(),
            'scholarshipsCount' => Scholarships::count(),
            'studentsCount' => Students::count(),
            'employeesCount' => Employees::count(),
            'kepsekCount' => Kepsek::count(),
        ];

        return view('dashboard', $data);
    }
}
