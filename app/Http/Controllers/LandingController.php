<?php

namespace App\Http\Controllers;

use App\Models\Meta;
use App\Models\Service;
use App\Models\Qualification;
use Illuminate\Support\Facades\Storage;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meta = Meta::findOrFail(1);
        $meta->profile_image_url = Storage::url($meta->profile_image_url);
        $meta->seo_image_url = Storage::url($meta->seo_image_url);
        
        $services = Service::where('user_id', 1)->orderBy('order', 'ASC')->get();
        $qualifications = Qualification::where('user_id', 1)->orderBy('order', 'ASC')->get();


        return view('welcome')->with([
            'meta' => $meta,
            'services' => $services,
            'qualifications' => $qualifications,

        ]);
    }
}
