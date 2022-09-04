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
        $services = Service::all();
        return view('admin.service.index')->with([
            'services' => $services
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'max:255'],
            'description' => ['required', 'max:255'],
            'logo_image_url' => ['required', 'max:512'],
            'order' => ['required', 'min:1', 'max:10']
        ]);

        Service::create([
            'user_id' => Auth()->user()->id,
            'title' => $request->title,
            'logo_image_url' => $request->logo_image_url,
            'description' => $request->description,
            'order' => intval($request->order),
        ]);

        $this->banner('Successfully created the service!');
        return redirect()->route('service.index');
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
        $request->validate([
            'title' => ['required', 'max:255'],
            'description' => ['required', 'max:255'],
            'logo_image_url' => ['required', 'max:512'],
            'order' => ['required', 'min:1', 'max:10']
        ]);

        $service->update(['user_id' => Auth()->user()->id,
            'title' => $request->title,
            'logo_image_url' => $request->logo_image_url,
            'description' => $request->description,
            'order' => intval($request->order),
        ]);

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
        $oldTitle = htmlentities($service->title);
        $service->deleteOrFail();

        $this->banner('Successfully deleted the service "' . htmlentities($oldTitle) . '"!');
        return redirect()->route('service.index');
    }
}
