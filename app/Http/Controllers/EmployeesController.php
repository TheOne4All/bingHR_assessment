<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allEmployees = Employee::all();
        return view('employees.index', compact('allEmployees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee = new Employee;
        $employee->employee_id = $request->employee_id;
        $employee->lastname = $request->lastname;
        $employee->firstname = $request->firstname;
        $employee->username = $request->username;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->role = $request->role;
        $employee->permission = $request->permission;
        $employee->password = $request->password;
        $employee->save();
        return redirect()->route('employees.index')->with('success', 'Employee has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $employee = Employee::find($id);
        $employee->employee_id = $request->employee_id;
        $employee->lastname = $request->lastname;
        $employee->firstname = $request->firstname;
        $employee->username = $request->username;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->role = $request->role;
        $employee->permission = $request->permission;
        $employee->password = $request->password;
        $employee->save();
        return redirect()->route('employees.index')->with('success', 'Employee has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index')->with('success', 'Employee has been deleted successfully');
    }
}