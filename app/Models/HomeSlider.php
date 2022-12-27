<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HomeSlider extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $table = 'homeslider';
    protected $fillable = [
        'img',
        'title',
        'description',
        'created_at',
        'updated_at'
    ];
}
