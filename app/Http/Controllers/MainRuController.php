<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class MainRuController extends Controller
{
    public function home(): View
    {
        $participants = \App\Models\Participant::orderBy('id', 'desc')
                                                ->limit(5)
                                                ->get();
        
        return view('home', compact('participants'));
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
        $participants = \App\Models\Participant::orderBy('id', 'desc')
                                                ->get();
        
        return view('participants', compact('participants'));
    }

    public function contacts(): View
    {
        return view('contacts');
    }

    public function moscow(): View
    {
        return view('moscow');
    }

    public function saint_petersburg(): View
    {
        return view('saint-petersburg');
    }

    public function dubai(): View
    {
        return view('dubai');
    }

    public function antalya(): View
    {
        return view('antalya');
    }

    public function alanya(): View
    {
        return view('alanya');
    }

    public function northern_cyprus(): View
    {
        return view('northern-cyprus');
    }

    public function baku(): View
    {
        return view('baku');
    }


    // public function halal(): View
    // {
    //     return view('halal');
    // }

    // public function faq(): View
    // {
    //     return view('faq');
    // }

    public function privacy_policy(): View
    {
        return view('privacy_policy');
    }
}
