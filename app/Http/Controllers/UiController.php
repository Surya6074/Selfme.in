<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;

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
        $check_portfolio = Count(Portfolio::where('user_id', 1)->get());
        return view('home', compact('check_portfolio'));
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
