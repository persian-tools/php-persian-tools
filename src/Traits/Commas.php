<?php

namespace PersianTools\Traits;

trait Commas
{
    /**
     * Add commas to numbers
     *
     * @param  $number
     * @return string
     */
    public static function addCommas($number)
    {
        // todo : parameter must be numeric
        $floatNumber = floatval(str_replace(',', '', $number));
        return !empty($number) ? number_format($floatNumber, strlen(substr(strrchr($floatNumber, "."), 1))) : '';
    }

     /**
     * Remove commas from numbers
    *
    * @param  $number
    * @return string
    */
    public static function removeCommas($number)
    {
        // todo : parameter must be numeric
        return !empty($number) ? str_replace(',', '', $number) : '';
    }
}
