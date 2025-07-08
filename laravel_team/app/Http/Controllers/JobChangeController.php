<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\JobChange;
class JobChangeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobChanges = JobChange::all();
        return view('jobChanges.index', compact('jobChanges'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobChanges.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'start_time' => 'required',
            'end_time' => 'required',
        ]);

        JobChange::create($validated);

        return redirect()->route('jobChanges.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(JobChange $jobChange)
    {
        return view('jobChanges.show', compact('jobChange'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JobChange $jobChange)
    {
        return view('jobChanges.edit', compact('jobChange'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JobChange $jobChange)
    {
        $validated = $request->validate([
            'start_time' => 'required',
            'end_time' => 'required',
        ]);

        $jobChange->update($validated);

        return redirect()->route('jobChanges.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JobChange $jobChange)
    {
        $jobChange->delete();
        return redirect()->route('jobChanges.index');
    }
}
