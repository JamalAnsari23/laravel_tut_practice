<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class student extends Controller
{
     function loadview()
    {
        // return view('student',['names'=>['jamal','haider','khan']]);

        $data=['Md','Jamal','Ansari','Khan','Haider'];
        return view('student',["users"=>$data]);


    }
}
