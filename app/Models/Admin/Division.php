<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\Admin\DivisionSection;

class Division extends Model
{
    use HasFactory;
    public $table = 'division';

    protected $fillable =[
        'titleAr',
        'titleEn',
        'descriptionAr',
        'descriptionEn',
        'contentAr',
        'contentEn',
        'image',
        'division_id',
    ];

    public function division() {
        return $this->belongsTo(DivisionSection::class);
    }
}

