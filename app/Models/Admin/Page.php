<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected $appends = ['title', 'content', 'description'];

    protected $fillable = [
        'titleAr',
        'titleEn',
        'descriptionAr',
        'descriptionEn',
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
    
    public function getDescriptionAttribute()
    {
        $locale = ucfirst(app()->getLocale());
        $key = 'description' . $locale; // Adjust key formation
    
        return $this->attributes[$key] ?? null; // Return null if the key doesn't exist
    }
    
}
