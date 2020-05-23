<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function users()
    {
        return User::take(10)->get();
    }

    public function user(User $user)
    {
        return $user;
    }

    public function cache(){
        return Cache::remember('cache', 60, function (){
            return User::take(10)->get();
        });
    }
}
