<?php

namespace App\Http\Controllers;

use App\User;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function users()
    {
        return User::all();
    }
}
