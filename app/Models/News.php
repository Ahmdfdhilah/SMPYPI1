<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'publications';
    protected $fillable = [
        'publication_name','publication_type', 'publication_desc', 'publication_img', 'publication_link'
    ];
}
