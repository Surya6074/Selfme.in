<?php

namespace App\Http\Controllers;

use App\Models\NewUpdate;
use App\Models\Portfolio;
use App\Models\Template;
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
        $news = NewUpdate::all();
        return view('new', compact('news'));
    }
    public function templatesui()
    {
        $templates = Template::all();
        return view('template', compact('templates'));
    }
    public function homeui()
    {
        $check_portfolio = Count(Portfolio::where('user_id', auth()->user()->id)->get());
        $Portfolio = Portfolio::where('user_id', auth()->user()->id)->first();
        $newupdate = NewUpdate::orderBy('created_at', 'DESC')->first();
        return view('home', compact('check_portfolio', 'newupdate', 'Portfolio'));
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
