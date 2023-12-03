<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kepsek extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'kepalasekolah';
    protected $fillable = [
        'kepsek_name',
        'kepsek_welcome',
        'kepsek_date',
        'kepsek_history',
        'kepsek_img'
    ];
}
