<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    // function index()
    // {
    //     return DB::select("select * from data");
    // }

    function getData()
    {
        return Data::all();
    }
}
