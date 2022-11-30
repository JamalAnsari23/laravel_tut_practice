<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class MemberS extends Controller
{
    function operations()
    {
        // $data = DB::table('students')->get();
        // return view('memberlist',['data'=>$data]);
        
        // return (array)DB::table('students')

        return DB::table('students')

        // ->where('id',4)
        // ->where('address','Mahnar')
        // ->find(4);
        // ->count();
        // ->insert([
        //     'name'=>'Shoaib',
        //     'email'=>'shoaib@gmail.com',
        //     'address'=>'Dubai'

        // ]);
        // ->where('id',15)
        // ->update([
        //     'name'=>'Ritesh',
        //     'email'=>'Ritesh@gmail.com',
        //     'address'=>'Dubai'

        // ]);
        ->where('id',14)->delete();
        // ->get();
    }
}
