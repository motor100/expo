<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MainRuController extends Controller
{
    public function home(): View
    {
        return view('home');
    }

    public function for_participants(): View
    {
        return view('for-participants');
    }

    public function poster(): View
    {
        return view('poster');
    }

    public function participants(): View
    {
        return view('participants');
    }

    public function contacts(): View
    {
        return view('contacts');
    }

    public function event(): View
    {
        return view('event');
    }
}
