<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model;

class CityDateString
{
    protected $city;

    /**
     * @param Illuminate\Database\Eloquent\Model \App\Models\City
     */
    public function __construct($city)
    {
        $this->city = $city;
    }
    
    /**
     * Дата в формате Carbon в строку вида 1 января 2020
     * @param
     * @return Illuminate\Database\Eloquent\Model \App\Models\City
     */
    public function ru(): Model
    {
        $day = $this->city->date->format('d');
        $month = (new \App\Services\Month())->ru($this->city->date->format('m'));
        $year = $this->city->date->format('Y');

        $this->city->dmy = $day . " " . $month . " " . $year;

        return $this->city;
    }

    /**
     * Дата в формате Carbon в строку вида 1 января 2020
     * @param
     * @return Illuminate\Database\Eloquent\Model \App\Models\City
     */
    public function en(): Model
    {
        $day = $this->city->date->format('d');
        $month = (new \App\Services\Month())->en($this->city->date->format('m'));
        $year = $this->city->date->format('Y');

        $this->city->dmy = $day . " " . $month . " " . $year;

        return $this->city;
    }

    /**
     * Дата в формате Carbon в строку вида 1 января 2020
     * @param
     * @return Illuminate\Database\Eloquent\Model \App\Models\City
     */
    public function tr(): Model
    {
        $day = $this->city->date->format('d');
        $month = (new \App\Services\Month())->tr($this->city->date->format('m'));
        $year = $this->city->date->format('Y');

        $this->city->dmy = $day . " " . $month . " " . $year;

        return $this->city;
    }
}