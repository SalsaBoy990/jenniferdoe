<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meta;
use Illuminate\Support\Facades\Storage;
use App\Support\InteractsWithBanner;

class MetaController extends Controller
{
    use InteractsWithBanner;

    protected $pathNormalizer;

    // dependency injection is needeed because cannot call static methods (defined in WhitespacePathNormalizer), 
    public function __construct(\League\Flysystem\WhitespacePathNormalizer $pathNormalizer)
    {
        $this->pathNormalizer = $pathNormalizer;
    }

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

        return view('admin.meta.index')->with([
            'meta' => $meta,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @param  \App\Models\Meta  $meta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Meta $meta)
    {
        $request->validate([
            'title' => ['required', 'max:255'],
            'seo_title' => ['required', 'max:255'],
            'subtitle' => ['required', 'max:255'],
            'description' => ['required', 'max:2000'],
            'seo_description' => ['required', 'max:255'],
            'email_address' => ['required', 'max:255'],
            'phone_number' => ['required', 'max:255'],
            'profile_image_url' => ['nullable', 'mimes:png,jpg,jpeg', 'max:1024'],
            'seo_image_url' => ['nullable', 'mimes:png,jpg,jpeg', 'max:1024'],
            'location' => ['required', 'max:255'],
            'facebook_link' => ['required', 'max:255'],
            'youtube_link' => ['required', 'max:255'],
        ]);

        $data = [
            'title' => $request->title,
            'seo_title' => $request->seo_title,
            'subtitle' => $request->subtitle,
            'description' => $request->description,
            'seo_description' => $request->seo_description,
            'email_address' => $request->email_address,
            'phone_number' => $request->phone_number,
            'location' => $request->location,
            'facebook_link' => $request->facebook_link,
            'youtube_link' => $request->youtube_link,
        ];

        $profileImage = $request->file('profile_image_url');
        $seoImage = $request->file('seo_image_url');

        // check if new images needs to be uploaded
        $imageUploads = [
            'profile' => $profileImage !== null && $profileImage->isValid(),
            'seo' => $seoImage !== null && $seoImage->isValid(),
        ];


        if ($imageUploads['profile']) {
            $profileImageName = time() . '-' . $profileImage->getClientOriginalName();
            $profileImagePath = $profileImage->storeAs('public/uploads', $this->pathNormalizer->normalizePath($profileImageName));
            if (!$profileImagePath) {
                $this->banner('Profile image upload failed!', 'error');
                return redirect()->route('meta.index');
            }
            $data['profile_image_url'] = $profileImagePath;

            if ($meta->profile_image_url) {
                Storage::delete($meta->profile_image_url);
            }
        }

        if ($imageUploads['seo']) {
            $seoImage = $request->file('seo_image_url');
            $seoImageName = time() . '-' . $seoImage->getClientOriginalName();
            $seoImagePath = $seoImage->storeAs('public/uploads', $this->pathNormalizer->normalizePath($seoImageName));
            if (!$seoImagePath) {
                $this->banner('Seo image upload failed!', 'error');
                return redirect()->route('meta.index');
            }
            $data['seo_image_url'] = $seoImagePath;
            if ($meta->seo_image_url) {
                Storage::delete($meta->seo_image_url);
            }
        }

        $meta->update($data);

        $this->banner('Successfully saved!');
        return redirect()->route('meta.index');
    }
}
