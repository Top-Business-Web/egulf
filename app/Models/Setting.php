<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $table = 'settings';

    protected  $fillable = [
        'logo',
        'sliders',
        'title_ar',
        'title_en',
        'year_of_experince',
        'phone',
        'email',
        'address_ar',
        'address_en',
        'desc_ar',
        'desc_en',
        'linked_in',
        'youtube',
        'facebook',
        'twitter',
        'liked_in',
        'terms_conditions',
        'shipping_policy',
        'returns',
        'work_date',
        'location',
    ];

    protected $casts = [
        'sliders' => 'array',
    ];
}
