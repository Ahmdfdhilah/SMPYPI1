<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'students';
    protected $fillable = [
        'student_total','student_tahun_ajaran'
    ];
}
