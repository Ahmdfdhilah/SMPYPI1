<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scholarships extends Model
{
    use HasFactory;
    protected $guarded = 'id';
    protected $table = 'scholarships';

    protected $fillable = [
        'scholarship_name', 'scholarship_desc', 'scholarship_condition'
    ];
}
