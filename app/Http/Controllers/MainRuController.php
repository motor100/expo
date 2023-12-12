<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class MainRuController extends Controller
{
    public function home(): View
    {
        return view('home');
    }

    public function home_ru(): RedirectResponse
    {
        return redirect('/');
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

    public function moscow(): View
    {
        return view('moscow');
    }

    public function halal(): View
    {
        return view('halal');
    }

    public function faq(): View
    {
        return view('faq');
    }

    public function privacy_policy(): View
    {
        return view('privacy_policy');
    }
}
