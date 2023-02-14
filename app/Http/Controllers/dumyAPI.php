<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dumyAPI extends Controller
{
    function getData(){
        return ['Name'=>'Ahmad','City'=>'Damascus','phone'=>'8768767'];
           }
}
