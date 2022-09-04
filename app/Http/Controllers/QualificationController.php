<?php

namespace App\Http\Controllers;

use App\Models\Qualification;
use Illuminate\Http\Request;

class QualificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qualifications = Qualification::all();
        return view('admin.qualification.index')->with([
            'qualifications' => $qualifications
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
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @param  \App\Models\Qualification  $qualification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Qualification $qualification)
    {
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
        $oldDate = htmlentities($qualification->date);
        $qualification->deleteOrFail();

        $this->banner('Successfully deleted the qaulification with the date "' . htmlentities($oldDate) . '"!');
        return redirect()->route('qualification.index');
    }
}
