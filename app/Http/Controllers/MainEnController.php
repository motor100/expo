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

        $cities = \App\Models\City::all();
        
        return view('en.home', compact('participants', 'cities'));
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
        $cities = \App\Models\City::all();
        
        return view('en.contacts', 'cities');
    }

    public function moscow(): View
    {
        $city = \App\Models\City::where('id', 1)->first();
        
        return view('en.moscow', compact('city'));
    }

    public function saint_petersburg(): View
    {
        $city = \App\Models\City::where('id', 2)->first();
        
        return view('en.saint-petersburg', compact('city'));
    }

    public function dubai(): View
    {
        $city = \App\Models\City::where('id', 3)->first();
        
        return view('en.dubai', compact('city'));
    }

    public function antalya(): View
    {
        $city = \App\Models\City::where('id', 4)->first();
        
        return view('en.antalya', compact('city'));
    }

    public function alanya(): View
    {
        $city = \App\Models\City::where('id', 5)->first();
        
        return view('en.alanya', compact('city'));
    }

    public function northern_cyprus(): View
    {
        $city = \App\Models\City::where('id', 6)->first();
        
        return view('en.northern-cyprus', compact('city'));
    }

    public function baku(): View
    {
        $city = \App\Models\City::where('id', 7)->first();
        
        return view('en.baku', compact('city'));
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
