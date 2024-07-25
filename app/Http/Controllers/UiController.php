<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UiController extends Controller
{
    public function indexui()
    {
        return view('index');
    }

    // user page ui
    public function dataui()
    {
        return view('data');
    }
    public function newupdatesui()
    {
        return view('new');
    }
    public function templatesui()
    {
        return view('template');
    }
    public function homeui()
    {
        return view('home');
    }


    //Auth ui
    public function registerui()
    {
        return view('auth.register');
    }
    public function loginui()
    {
        return view('auth.login');
    }
}
