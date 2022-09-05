<?php

namespace App\Http\Controllers;

use App\Models\Qualification;
use Illuminate\Http\Request;
use App\Support\InteractsWithBanner;

class QualificationController extends Controller
{
    use InteractsWithBanner;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewAny', Qualification::class);

        $qualifications = Qualification::orderBy('order', 'ASC')->get();
        return view('admin.qualification.index')->with([
            'qualifications' => $qualifications
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', Qualification::class);

        return view('admin.qualification.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create', Qualification::class);

        $request->validate([
            'date' => ['required', 'max:255'],
            'description' => ['required', 'max:255'],
            'order' => ['required', 'min:1', 'max:10']
        ]);

        Qualification::create([
            'user_id' => Auth()->user()->id,
            'date' => $request->date,
            'description' => $request->description,
            'order' => intval($request->order),
        ]);

        $this->banner('Successfully created the qualification!');
        return redirect()->route('qualification.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $qualification
     * @return \Illuminate\Http\Response
     */
    public function show(Qualification $qualification)
    {
        $this->authorize('view', Qualification::class);

        return view('admin.qualification.show')->with([
            'qualification' => $qualification,
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @param  \App\Models\Qualification  $qualification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Qualification $qualification)
    {
        //$this->authorize('update', Qualification::class);

        $request->validate([
            'date' => ['required', 'max:255'],
            'description' => ['required', 'max:255'],
            'order' => ['required', 'min:1', 'max:10']
        ]);

        $qualification->update([
            'date' => $request->date,
            'description' => $request->description,
            'order' => intval($request->order),
        ]);

        $this->banner('Successfully saved the qualification!');
        return redirect()->route('qualification.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Qualification  $qualification
     * @return \Illuminate\Http\Response
     */
    public function destroy(Qualification $qualification)
    {
        $this->authorize('delete', Qualification::class);

        $oldDate = htmlentities($qualification->date);
        $qualification->deleteOrFail();

        $this->banner('Successfully deleted the qualification with the date "' . htmlentities($oldDate) . '"!');
        return redirect()->route('qualification.index');
    }
}
