<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Test;

class userController extends Controller
{
    //
    function getData()
    {
        //return Test::all();
        return DB::select("select * from users");
        //echo "hello from user controller";
    }
}
