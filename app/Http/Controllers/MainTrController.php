<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MainTrController extends Controller
{
    public function home(): View
    {
        return view('tr.home');
    }

    public function for_participants(): View
    {
        return view('tr.for-participants');
    }

    public function poster(): View
    {
        return view('tr.poster');
    }

    public function participants(): View
    {
        return view('tr.participants');
    }

    public function contacts(): View
    {
        return view('tr.contacts');
    }

    public function event(): View
    {
        return view('tr.event');
    }

    public function halal(): View
    {
        return view('tr.halal');
    }

    public function faq(): View
    {
        return view('tr.faq');
    }

    public function privacy_policy(): View
    {
        return view('tr.privacy_policy');
    }
}
