<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    function name($name)
    {
        return view('pages.users', compact('name'));
    }

    function loadView()
    {
        // return view('pages.users', ['name' => ['Anil', 'Bruce', 'Sam']]);
        $name = ['Anil', 'Bruce', 'Sam'];
        return view('pages.users', ['name' => $name]);
    }
}
