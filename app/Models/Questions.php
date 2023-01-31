<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    use HasFactory;

    protected $table = 'questions';

    protected $fillable = [
        'title_ar',
        'title_en',
        'desc_ar',
        'desc_en'
    ];
}
