<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class MainEnController extends Controller
{
    public function home(): View
    {
        // Participants
        $participants = \App\Models\Participant::orderBy('id', 'desc')
                                                ->limit(5)
                                                ->get();

        // Cities
        $cities = \App\Models\City::all();

        $cities->each(function ($item) {
            $item->day = $item->date->format('d');
            $item->month = (new \App\Services\Month())->en($item->date->format('m'));
            $item->year = $item->date->format('Y');
        });

        // Slider
        $sliders = \App\Models\MainSlider::all();

        // Partners
        $partners = \App\Models\Partner::all();

        // Ticket date
        $ticket = \App\Models\Ticket::find(1);
        
        $ticket->day = $ticket->date->format('d');

        $ticket->month = (new \App\Services\Month())->en($ticket->date->format('m'));

        $ticket->year = $ticket->date->format('Y');
        
        return view('en.home', compact('participants', 'cities', 'sliders', 'partners', 'ticket'));
    }

    public function for_participants(): View
    {
        return view('en.for-participants');
    }

    public function poster(): View
    {
        $cities_array = (new \App\Services\Cities())->en();

        return view('en.poster', compact('cities_array'));
    }

    public function participants(): View
    {
        $participants = \App\Models\Participant::orderBy('id', 'desc')
                                                ->get();
        
        return view('en.participants', compact('participants'));
    }

    public function contacts(): View
    {
        // Offices
        $offices = \App\Models\Office::orderBy('id', 'desc')->get();

        // Cities
        $cities = \App\Models\City::all();

        $cities->each(function ($item) {
            $item->day = $item->date->format('d');
            $item->month = (new \App\Services\Month())->en($item->date->format('m'));
            $item->year = $item->date->format('Y');
        });
        
        return view('en.contacts', compact('offices', 'cities'));
    }

    public function moscow(): View
    {
        $city = \App\Models\City::where('id', 1)->first();

        $city = (new \App\Services\CityDateString($city))->en();
        
        return view('en.moscow', compact('city'));
    }

    public function saint_petersburg(): View
    {
        $city = \App\Models\City::where('id', 2)->first();

        $city = (new \App\Services\CityDateString($city))->en();
        
        return view('en.saint-petersburg', compact('city'));
    }

    public function dubai(): View
    {
        $city = \App\Models\City::where('id', 3)->first();

        $city = (new \App\Services\CityDateString($city))->en();
        
        return view('en.dubai', compact('city'));
    }

    public function antalya(): View
    {
        $city = \App\Models\City::where('id', 4)->first();

        $city = (new \App\Services\CityDateString($city))->en();
        
        return view('en.antalya', compact('city'));
    }

    public function alanya(): View
    {
        $city = \App\Models\City::where('id', 5)->first();

        $city = (new \App\Services\CityDateString($city))->en();
        
        return view('en.alanya', compact('city'));
    }

    public function northern_cyprus(): View
    {
        $city = \App\Models\City::where('id', 6)->first();

        $city = (new \App\Services\CityDateString($city))->en();
        
        return view('en.northern-cyprus', compact('city'));
    }

    public function baku(): View
    {
        $city = \App\Models\City::where('id', 7)->first();

        $city = (new \App\Services\CityDateString($city))->en();
        
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
