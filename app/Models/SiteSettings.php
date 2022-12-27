<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SiteSettings extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $fillable = [
        'site_name',
        'logo',
        'favicon',
        'keyword',
        'description',
        'phone',
        'email',
        'location',
        'facebook',
        'twitter',
        'instagram',
        'linkedin'
    ];
}
