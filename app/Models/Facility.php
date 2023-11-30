<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'facilities';
    protected $fillable = [
        'facilities_name', 'facilities_desc','facilities_total', 'facilities_img'
    ];
}
