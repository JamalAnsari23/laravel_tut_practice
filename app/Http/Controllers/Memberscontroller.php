<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\student;

class Memberscontroller extends Controller
{
    function savedata(Request $req)
    {

        $member = new student;
        $member->name=$req->name;
        $member->email=$req->email;
        $member->address=$req->address;

        $member->save();
        return redirect('add');

    }
}
