<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
      
        $topLevelEmployees = Employee::whereNull('manager_id')->with('subordinates')->get();
        return view('employees.index', ['employees' => $topLevelEmployees]);
    }
}
