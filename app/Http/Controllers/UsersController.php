<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    // function name($name)
    // {
    //     return view('pages.users', compact('name'));
    // }

    // function loadView()
    // {
    //     // return view('pages.users', ['name' => ['Anil', 'Bruce', 'Sam']]);
    //     $name = ['Anil', 'Bruce', 'Sam'];
    //     return view('pages.users', ['name' => $name]);
    // }

    // function getData(Request $request)
    // {
    //     return $request->input();
    // }

    function index()
    {
        // return "DB connection established";
        return DB::select("select * from data");
    }
}
