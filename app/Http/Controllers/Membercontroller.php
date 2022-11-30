<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\student;

class Membercontroller extends Controller
{
    function show()
    {
        // $data = student::all();
        // if we want pagination then we just replace all() to paginate()
        $data= student::paginate(7);
        return view('list',['members'=>$data]);
    }
    function deleterow($id)
    {
        $data = student::find($id);
        $data->delete();
        return redirect('list');
    }
    function showData($id)
    {
        $data = student::find($id);
       return view('edit',['data'=>$data]); 
    }
    function update(Request $req)
    {
        $data=student::find($req->id);
        $data->name=$req->name;
        $data->email=$req->email;
        $data->address=$req->address;
        $data->save();
        return redirect('list');

    }
    
}
