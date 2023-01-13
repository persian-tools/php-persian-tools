<?php

namespace PersianTools\Traits;

Trait ConvertNumbers
{
    public static $en_nums = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
    public static $fa_nums = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
    public static $ar_nums = ['٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩'];

    /**
     * Convert Persian numbers to English
     * 
     * @param  int|string   $fa_num
     * @return string|array replace number
     */
    public static function persianToEnglish($fa_num)
    {
        return str_replace(self::$fa_nums, self::$en_nums, $fa_num);
    }

    public static function englishToPersian($en_num)
    {
        return str_replace(self::$en_nums, self::$fa_nums, $en_num);
    }

    public static function persianToArabic($fa_num)
    {
        return str_replace(self::$fa_nums, self::$ar_nums, $fa_num);
    }

    public static function arabicToPersian($ar_num)
    {
        return str_replace(self::$ar_nums, self::$fa_nums, $ar_num);
    }

    public static function englishToArabic($en_num)
    {
        return str_replace(self::$en_nums, self::$ar_nums, $en_num);
    }

    public static function arabicToEnglish($ar_num)
    {
        return str_replace(self::$ar_nums, self::$en_nums, $ar_num);
    }
}