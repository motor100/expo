<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MainEnController extends Controller
{
    public function home(): View
    {
        return view('en.home');
    }

    public function for_participants(): View
    {
        return view('en.for-participants');
    }

    public function poster(): View
    {
        return view('en.poster');
    }

    public function participants(): View
    {
        return view('en.participants');
    }

    public function contacts(): View
    {
        return view('en.contacts');
    }

    public function event(): View
    {
        return view('en.event');
    }
}
