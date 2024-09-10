<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    public $table = 'project';

    protected $fillable =[
        'titleAr',
        'titleEn',
        'descriptionAr',
        'descriptionEn',
        'contentAr',
        'contentEn',
        'image',
        'images',
    ];

}
