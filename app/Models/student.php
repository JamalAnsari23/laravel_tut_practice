<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    // public $table='employees';  //this is use for get data from other table through model

    public $timestamps=false;

    // public $timestamps=false    this is use for if we do not add created_
    //  at and updated_at in database table then use this 




}
