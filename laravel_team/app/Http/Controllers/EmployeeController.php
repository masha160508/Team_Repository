<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\JobChange;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jobChanges = JobChange::all();
        return view('employees.create', compact('jobChanges'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
 //dd($request->all());

        $validated = $request->validate([
            'name' => 'required',
            'date_of_birth' => 'date',
            'email' => 'unique:employees,email',
            'address' => 'required',
            'phone' => 'required',
            'job_title' => 'required',
            'job_change_id' => 'exists:job_changes,id',
        ]);
        Employee::create($validated);
        return redirect()->route('employees.index');
    }
    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        return view('employees.show',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        $jobChanges = JobChange::all();
        return view('employees.edit',compact('employee','jobChanges'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        $employee->update($request->all());
        return redirect()->route('employees.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index');
    }
}
