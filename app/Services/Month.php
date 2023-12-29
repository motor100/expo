<?php

namespace App\Services;

class Month
{
    /**
     * Месяцы в родительном падеже
     * @param number
     * @return string
     */
    public function ru($month): string
    {
        switch ($month) {
            case '12':
                $month_name = "Декабря";
                break;
            case '11':
                $month_name = "Ноября";
                break;
            case '10':
                $month_name = "Октября";
                break;
            case '09':
                $month_name = "Сентября";
                break;
            case '08':
                $month_name = "Августа";
                break;
            case '07':
                $month_name = "Июля";
                break;
            case '06':
                $month_name = "Июня";
                break;
            case '05':
                $month_name = "Мая";
                break;
            case '04':
                $month_name = "Апреля";
                break;
            case '03':
                $month_name = "Марта";
                break;
            case '02':
                $month_name = "Февраля";
                break;
            case '01':
                $month_name = "Января";
                break;
        }

        return $month_name;
    }

    /**
     * @param number
     * @return string
     */
    public function en($month): string
    {
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

        return $month_name;
    }

    /**
     * @param number
     * @return string
     */
    public function tr($month): string
    {
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

        return $month_name;
    }
}