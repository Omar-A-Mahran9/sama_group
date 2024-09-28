<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    public $table = 'slider';
    protected $appends = ['title', 'content'];

 
    protected $fillable = [
        'titleAr',
        'titleEn',
        'contentAr',
        'contentEn',
        'image',
    ];
    
    public function getTitleAttribute()
    {
        $locale = ucfirst(app()->getLocale()); // Get the locale and capitalize it
        $key = 'title' . $locale; // Adjust key formation
    
        return $this->attributes[$key] ?? null; // Return null if the key doesn't exist
    }
    
    public function getContentAttribute()
    {
        $locale = ucfirst(app()->getLocale());
        $key = 'content' . $locale; // Adjust key formation
    
        return $this->attributes[$key] ?? null; // Return null if the key doesn't exist
    }
    
}
