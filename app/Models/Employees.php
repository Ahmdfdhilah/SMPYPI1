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
        'employee_name',
        'employee_type',
        'employee_position',
        'employee_img'
    ];
}
