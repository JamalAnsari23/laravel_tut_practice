<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AggregatesController extends Controller
{
    function operations()
    {
        // return DB::table('students')->get();
        // return DB::table('students')->sum('id');
        // return DB::table('students')->min('id');
        // return DB::table('students')->max('id');
        // return DB::table('students')->max('name');
        // return DB::table('students')->min('name');
        return DB::table('students')->avg('id');






    }
}
