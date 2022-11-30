<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    function getData()
    {
        // 1
        // return "Hello From Controller";
        // return DB::table('employees')
        // ->join
        // ('company','employees.id','=','company.employee_id')

        // 2

        // ->get();

        //  return DB::table('employees')
        // ->join
        // ('company','employees.id','=','company.employee_id')
        // ->select('company.*','employees.*')
        // ->get();


     // 3



         return DB::table('employees')
        ->join('company','employees.id','=','company.employee_id')
        ->where('employees.id',2)
        ->select('employees.name','company.name')
        ->get();
    }
}
