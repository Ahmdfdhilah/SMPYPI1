<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extracurricular extends Model
{
    use HasFactory;
    protected $guarded = 'id';
    protected $table = 'eskuls';

    protected $fillable = [
        'eskul_name', 'eskul_desc', 'eskul_img'
    ];
}
