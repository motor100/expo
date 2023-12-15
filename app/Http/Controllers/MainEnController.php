<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MainEnController extends Controller
{
    public function home(): View
    {
        $participants = \App\Models\Participant::orderBy('id', 'desc')
                                                ->limit(5)
                                                ->get();
        
        return view('en.home', compact('participants'));
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
        $participants = \App\Models\Participant::orderBy('id', 'desc')
                                                ->get();
        
        return view('en.participants', compact('participants'));
    }

    public function contacts(): View
    {
        return view('en.contacts');
    }

    public function moscow(): View
    {
        return view('en.moscow');
    }

    public function saint_petersburg(): View
    {
        return view('en.saint-petersburg');
    }

    public function dubai(): View
    {
        return view('en.dubai');
    }

    public function antalya(): View
    {
        return view('en.antalya');
    }

    public function alanya(): View
    {
        return view('en.alanya');
    }

    public function northern_cyprus(): View
    {
        return view('en.northern-cyprus');
    }

    public function baku(): View
    {
        return view('en.baku');
    }

    // public function halal(): View
    // {
    //     return view('en.halal');
    // }

    // public function faq(): View
    // {
    //     return view('en.faq');
    // }

    public function privacy_policy(): View
    {
        return view('en.privacy_policy');
    }
}
