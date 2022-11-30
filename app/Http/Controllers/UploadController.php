<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    function index(Request $req)
    {
        // return $req->file('document')->store('image');
        $request= $req->file('document')->getClientOriginalName();
        $path = $req->file('document')->storeAs('/image',$request);
        return $path;
    }
}
