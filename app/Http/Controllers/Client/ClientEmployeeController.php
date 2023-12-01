<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class ClientEmployeeController extends Controller
{
    public function __invoke()
    {
        $guru = DB::table('employees')
        ->where('employee_type', 'like', "%guru%")
        ->get();  
        $staff = DB::table('employees')
        ->where('employee_type', 'like', "%staff%")
        ->get();          
        return view('client.tentang_kami.guru_staff.index', compact('guru', 'staff'));
    }
}
