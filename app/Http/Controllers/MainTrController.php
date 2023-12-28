<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\View\View;

class MainTrController extends Controller
{
    public function home(): View
    {
        $participants = \App\Models\Participant::orderBy('id', 'desc')
                                                ->limit(5)
                                                ->get();

        $cities = \App\Models\City::all();

        $sliders = \App\Models\MainSlider::all();
        
        return view('tr.home', compact('participants', 'cities', 'sliders'));
    }

    public function for_participants(): View
    {
        return view('tr.for-participants');
    }

    public function poster(): View
    {
        $cities_array = (new \App\Services\Cities())->tr();
        
        return view('tr.poster', compact('cities_array'));
    }

    public function participants(): View
    {
        $participants = \App\Models\Participant::orderBy('id', 'desc')
                                                ->get();
        
        return view('tr.participants', compact('participants'));
    }

    public function contacts(): View
    {
        // Cities
        $cities = \App\Models\City::all();

        // Offices
        $offices = \App\Models\Office::orderBy('id', 'desc')->get();
        
        return view('tr.contacts', compact('cities', 'offices'));
    }

    public function moscow(): View
    {
        $city = \App\Models\City::where('id', 1)->first();
        
        return view('tr.moscow', compact('city'));
    }

    public function saint_petersburg(): View
    {
        $city = \App\Models\City::where('id', 2)->first();
        
        return view('tr.saint-petersburg', compact('city'));
    }

    public function dubai(): View
    {
        $city = \App\Models\City::where('id', 3)->first();
        
        return view('tr.dubai', compact('city'));
    }

    public function antalya(): View
    {
        $city = \App\Models\City::where('id', 4)->first();
        
        return view('tr.antalya', compact('city'));
    }

    public function alanya(): View
    {
        $city = \App\Models\City::where('id', 5)->first();
        
        return view('tr.alanya', compact('city'));
    }

    public function northern_cyprus(): View
    {
        $city = \App\Models\City::where('id', 6)->first();
        
        return view('tr.northern-cyprus', compact('city'));
    }

    public function baku(): View
    {
        $city = \App\Models\City::where('id', 7)->first();
        
        return view('tr.baku', compact('city'));
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
