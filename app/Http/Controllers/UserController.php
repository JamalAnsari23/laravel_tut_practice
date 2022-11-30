<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;


class UserController extends Controller
{
    function show($id)
    {
        // return "Hello From Controllers";
        return $id;
    }

    function index()
    {
        return DB::select("select * from students");
    }

    function api()
    {
        $data = Http::get("https://reqres.in/api/users?page=1");
        return view('api',['collection'=>$data['data']]);
    }
}
