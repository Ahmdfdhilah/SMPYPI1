<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    use HasFactory;

    protected $fillable = [
        'achievement_name',
        'achievement_desc',
        'achievement_date',
        'achievement_img'
    ];
}
