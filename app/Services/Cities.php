<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class Cities
{
    public function ru(): array
    {
        $cities = \App\Models\City::all();

        $cities_array = [];

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

        return $cities_array;
    }

    public function en(): array
    {
        $cities = \App\Models\City::all();

        $cities_array = [];

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
                        $month_name = "December";
                        break;
                    case '11':
                        $month_name = "November";
                        break;
                    case '10':
                        $month_name = "October";
                        break;
                    case '09':
                        $month_name = "September";
                        break;
                    case '08':
                        $month_name = "August";
                        break;
                    case '07':
                        $month_name = "July";
                        break;
                    case '06':
                        $month_name = "June";
                        break;
                    case '05':
                        $month_name = "May";
                        break;
                    case '04':
                        $month_name = "April";
                        break;
                    case '03':
                        $month_name = "March";
                        break;
                    case '02':
                        $month_name = "February";
                        break;
                    case '01':
                        $month_name = "January";
                        break;
                }

                $arr["text"] = $month_name . " " . $city->date->year;
                $cities_array[] = $arr;
            }

            $prev_month = $month;
        }

        return $cities_array;
    }

    public function tr(): array
    {
        $cities = \App\Models\City::all();

        $cities_array = [];

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
                        $month_name = "Aralık";
                        break;
                    case '11':
                        $month_name = "Kasım";
                        break;
                    case '10':
                        $month_name = "Ekim";
                        break;
                    case '09':
                        $month_name = "Eylül";
                        break;
                    case '08':
                        $month_name = "Ağustos";
                        break;
                    case '07':
                        $month_name = "Temmuz";
                        break;
                    case '06':
                        $month_name = "Haziran";
                        break;
                    case '05':
                        $month_name = "Mayıs";
                        break;
                    case '04':
                        $month_name = "Nisan";
                        break;
                    case '03':
                        $month_name = "Mart";
                        break;
                    case '02':
                        $month_name = "Şubat";
                        break;
                    case '01':
                        $month_name = "Ocak";
                        break;
                }

                $arr["text"] = $month_name . " " . $city->date->year;
                $cities_array[] = $arr;
            }

            $prev_month = $month;
        }

        return $cities_array;
    }    
}