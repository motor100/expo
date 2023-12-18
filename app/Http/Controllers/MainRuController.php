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

        $cities = \App\Models\City::all();
        
        return view('home', compact('participants', 'cities'));
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
        $cities = \App\Models\City::all();

        $cities_array = [];

        /*
        $cities_array = [
            0 => [
                "cities" => [
                    $cities[0],
                    $cities[2],
                ],                
                "text" => "Декабрь 2023"
            ],
            1 => [
                "cities" => [
                    $cities[1],
                    $cities[3],
                ],
                "text" => "Январь 2024"
            ],
            2 => [
                "cities" => [
                    $cities[4],
                ],
                "text" => "Февраль 2024"
            ],
        ];
        */



        $prev_month = "";
        foreach($cities as $city) {
            $month = $city->date->month;

            if ($prev_month == $month) {

                $lastKey = count($cities_array) - 1;
                $cities_array[$lastKey]["cities"][] = $city;
            } else {
                $arr = [];
                $arr["cities"] = [];
                $arr["cities"][] = $city;

                switch ($month) {
                    case '12':
                        $month_name = "Декабрь";
                        break;
                    case '11':
                        $month_name = "Ноябрь";
                        break;
                    case '10':
                        $month_name = "Октябрь";
                        break;
                    case '09':
                        $month_name = "Сентябрь";
                        break;
                    case '08':
                        $month_name = "Август";
                        break;
                    case '07':
                        $month_name = "Июль";
                        break;
                    case '06':
                        $month_name = "Июнь";
                        break;
                    case '05':
                        $month_name = "Май";
                        break;
                    case '04':
                        $month_name = "Апрель";
                        break;
                    case '03':
                        $month_name = "Март";
                        break;
                    case '02':
                        $month_name = "Февраль";
                        break;
                    case '01':
                        $month_name = "Январь";
                        break;
                }

                $arr["text"] = $month_name . " " . $city->date->year;
                $cities_array[] = $arr;
            }

            $prev_month = $month;
        }
        
        return view('poster', compact('cities_array'));
    }

    public function participants(): View
    {
        $participants = \App\Models\Participant::orderBy('id', 'desc')
                                                ->get();
        
        return view('participants', compact('participants'));
    }

    public function contacts(): View
    {
        $cities = \App\Models\City::all();
        
        return view('contacts', 'cities');
    }

    public function moscow(): View
    {
        $city = \App\Models\City::where('id', 1)->first();
        
        return view('moscow', compact('city'));
    }

    public function saint_petersburg(): View
    {
        $city = \App\Models\City::where('id', 2)->first();
        
        return view('saint-petersburg', compact('city'));
    }

    public function dubai(): View
    {
        $city = \App\Models\City::where('id', 3)->first();
        
        return view('dubai', compact('city'));
    }

    public function antalya(): View
    {
        $city = \App\Models\City::where('id', 4)->first();
        
        return view('antalya', compact('city'));
    }

    public function alanya(): View
    {
        $city = \App\Models\City::where('id', 5)->first();
        
        return view('alanya', compact('city'));
    }

    public function northern_cyprus(): View
    {
        $city = \App\Models\City::where('id', 6)->first();
        
        return view('northern-cyprus', compact('city'));
    }

    public function baku(): View
    {
        $city = \App\Models\City::where('id', 7)->first();
        
        return view('baku', compact('city'));
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
