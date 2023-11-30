<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'employees';
    protected $fillable = [
        'employees_name',
        'employees_type',
        'employee_position',
        'employee_img'
    ];
}
