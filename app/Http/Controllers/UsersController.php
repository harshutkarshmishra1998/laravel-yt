<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    function name($name)
    {
        return view('pages.users', compact('name'));
    }
}
