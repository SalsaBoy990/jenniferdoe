<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Support\InteractsWithBanner;

class ServiceController extends Controller
{
    use InteractsWithBanner;

    protected $pathNormalizer;

    // dependency injection is needed because cannot call static methods (defined in WhitespacePathNormalizer), 
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
        $this->authorize('viewAny', Service::class);

        $services = Service::orderBy('order', 'ASC')->get();
        return view('admin.service.index')->with([
            'services' => $services
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', Service::class);

        return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create', Service::class);

        $request->validate([
            'title' => ['required', 'max:255'],
            'description' => ['required', 'max:255'],
            'logo_image_url' => ['required', 'mimes:png,jpg,jpeg', 'max:512'],
            'order' => ['required', 'min:1', 'max:10']
        ]);

        $logoImage = $request->file('logo_image_url');

        if ($logoImage && $logoImage->isValid()) {
            $logoImageName = time() . '-' . $logoImage->getClientOriginalName();
            $logoImagePath = $logoImage->storeAs('public/uploads', $this->pathNormalizer->normalizePath($logoImageName));
            if (!$logoImagePath) {
                $this->banner('Logo image upload failed!', 'error');
                return redirect()->route('service.index');
            }
        }

        Service::create([
            'user_id' => Auth()->user()->id,
            'title' => $request->title,
            'logo_image_url' => $logoImagePath,
            'description' => $request->description,
            'order' => intval($request->order),
        ]);

        $this->banner('Successfully created the service!');
        return redirect()->route('service.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        $this->authorize('view', Service::class);

        return view('admin.service.show')->with([
            'service' => $service,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $this->authorize('update', Service::class);

        $request->validate([
            'title' => ['required', 'max:255'],
            'description' => ['required', 'max:255'],
            'logo_image_url' => ['nullable', 'mimes:png,jpg,jpeg', 'max:512'],
            'order' => ['required', 'min:1', 'max:10']
        ]);

        $data = [
            'user_id' => Auth()->user()->id,
            'title' => $request->title,
            'description' => $request->description,
            'order' => intval($request->order),
        ];

        $logoImage = $request->file('logo_image_url');

        if ($logoImage && $logoImage->isValid()) {
            $logoImageName = time() . '-' . $logoImage->getClientOriginalName();
            $logoImagePath = $logoImage->storeAs('public/uploads', $this->pathNormalizer->normalizePath($logoImageName));
            if (!$logoImagePath) {
                $this->banner('Logo image upload failed!', 'error');
                return redirect()->route('service.index');
            }

            if ($service->logo_image_url) {
                Storage::delete($service->logo_image_url);
            }

            $data['logo_image_url'] = $logoImagePath;
        }

        $service->update($data);

        $this->banner('Successfully saved the service!');
        return redirect()->route('service.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $this->authorize('delete', Service::class);

        $oldTitle = htmlentities($service->title);
        if ($service->logo_image_url) {
            Storage::delete($service->logo_image_url);
        }

        $service->deleteOrFail();

        $this->banner('Successfully deleted the service "' . htmlentities($oldTitle) . '"!');
        return redirect()->route('service.index');
    }
}
