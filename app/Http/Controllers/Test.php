<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test extends Controller
{
    //
    function loadView()
    {
        return view('user',['username'=>'Gali']);
    }
}
