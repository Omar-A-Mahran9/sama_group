<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    public $table = 'slider';

    protected $fillable =[
        'titleAr',
        'titleEn',
        'contentAr',
        'contentEn',
        'image',
    ];
}
