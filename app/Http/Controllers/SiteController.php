<?php

namespace App\Http\Controllers;

use App\Models\Bestquality;
use App\Models\SiteSettings;
use App\Models\Why;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function index()
    {
        $sitesettings = DB::table('site_settings')
            ->join('media', 'site_settings.id', '=', 'media.model_id')
            ->select(
                'site_settings.site_name',
                'site_settings.logo',
                'site_settings.favicon',
                'site_settings.keyword',
                'site_settings.description',
                'site_settings.phone',
                'site_settings.email',
                'site_settings.location',
                'site_settings.footer_text',
                'site_settings.facebook',
                'site_settings.twitter',
                'site_settings.instagram',
                'site_settings.linkedin',
                'media.id',
                'media.file_name'
            )->first(1);

        $services = DB::table('services')
            ->join('media', 'services.id', '=', 'media.model_id')
            ->select(
                'services.title',
                'services.description',
                'media.id',
                'media.file_name'
            )->where('media.collection_name', 'services')->get();

        $homeslider = DB::table('homeslider')
            ->join('media', 'homeslider.id', '=', 'media.model_id')
            ->select(
                'homeslider.title',
                'homeslider.description',
                'media.id',
                'media.file_name'
            )
            ->where('media.collection_name', 'homeslider')
            ->get();
        $testimonials = DB::table('testimonials')
            ->join('media', 'testimonials.id', '=', 'media.model_id')->get();

        $bestquality = Bestquality::find(1);
        $whies = Why::all();


        return view('index', [
            'sitesettings' => $sitesettings,
            'homeslider' => $homeslider,
            'testimonials' => $testimonials,
            'whies' => $whies,
            'services' => $services,
            'bestquality' => $bestquality
        ]);
    }
}
