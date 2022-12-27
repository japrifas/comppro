<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Services extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $fillable = [
        'title',
        'description',
        'created_at',
        'updated_at'
    ];
}
