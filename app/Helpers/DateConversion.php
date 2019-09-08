<?php

namespace App\Helpers;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class DateConversion extends Model
{
    public static function DtoY($date)
    {
        $start='';
        try {
            if($date!='') {
                $start = strtr($date, '/', '-');
                $start = date('Y-m-d', strtotime(trim($start)));
            }
        }
        catch (\Exception $e)
        {
        }
        return $start;
    }

    public static function YtoD($date)
    {
        $start='';
        try {
            if($date!='') {
                $start = strtr($date, '/', '-');
                $start = date('d/m/Y', strtotime(trim($start)));
            }
        }
        catch (\Exception $e)
        {
        }
        return $start;
    }
	public static function YtoD_day($date)
    {
        $start='';
        try {
            if($date!='') {
                $start = strtr($date, '/', '-');
                $start = date('d-M-y (D)', strtotime(trim($start)));
            }
        }
        catch (\Exception $e)
        {
        }
        return $start;
    }


    public static function time_since($since) {
        $since = (strtotime(Carbon::now()) - (strtotime($since))) ;
        $chunks = array(
            array(60 * 60 * 24 * 365 , 'year'),
            array(60 * 60 * 24 * 30 , 'month'),
            array(60 * 60 * 24 * 7, 'week'),
            array(60 * 60 * 24 , 'day'),
            array(60 * 60 , 'hour'),
            array(60 , 'minute'),
            array(1 , 'second')
        );

        for ($i = 0, $j = count($chunks); $i < $j; $i++) {
            $seconds = $chunks[$i][0];
            $name = $chunks[$i][1];
            if (($count = floor($since / $seconds)) != 0) {
                break;
            }
        }

        $print = ($count == 1) ? '1 '.$name : "$count {$name}s";
        return $print;
    }
}
