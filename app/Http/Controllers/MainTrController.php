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

    public function moscow(): View
    {
        return view('tr.moscow');
    }

    public function saint_petersburg(): View
    {
        return view('tr.saint-petersburg');
    }

    public function dubai(): View
    {
        return view('tr.dubai');
    }

    public function antalya(): View
    {
        return view('tr.antalya');
    }

    public function alanya(): View
    {
        return view('tr.alanya');
    }

    public function northern_cyprus(): View
    {
        return view('tr.northern-cyprus');
    }

    public function baku(): View
    {
        return view('tr.baku');
    }

    // public function halal(): View
    // {
    //     return view('tr.halal');
    // }

    // public function faq(): View
    // {
    //     return view('tr.faq');
    // }

    public function privacy_policy(): View
    {
        return view('tr.privacy_policy');
    }
}
