<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\Admin\Division;

class DivisionSection extends Model
{
    public $table = 'division_section';
    use HasFactory;
    protected $fillable =[
        'titleAr',
        'titleEn',
        'descriptionAr',
        'descriptionEn',
        'image',
    ];

    public function divisions() {
        return $this->hasMany(Division::class);
    }
}
