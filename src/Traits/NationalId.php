<?php

namespace PersianTools\Traits;

trait NationalId
{
    /**
     * verify Iranian national ID
     * Credit : Alireza Nasseh
     * @param  string $code
     * @return bool
     */
    static public function verifyIranianNationalId(string $code)
    {

        if(!preg_match('/^\d{10}$/',$code))
            return false;

        $codeLength = strlen($code);

        // Two right digits may be zero
        if ($codeLength < 8 || $codeLength > 10) return false;
        $zeroFill = 10 - $codeLength;
        $code = str_repeat('0', $zeroFill) . $code;

        // National ID digits can not be the same (ex. 1111111111 or 9999999999 ...)
        for ($i = 0; $i < 10; $i++)
            if ($code == str_repeat($i, 10)) return false;

        // Calculating the check digit
        for ($pos = 10, $index = 0, $sum = 0; $pos > 1; $pos--, $index++) {
            $digit = substr($code, $index, 1);
            $mult = (int)$digit * $pos;
            $sum += $mult;
        }

        $checkDigit = (int)substr($code, -1);
        $mod = $sum % 11;
        if ($mod < 2 && $mod == $checkDigit) return true;
        if ($mod >= 2 && $checkDigit == 11 - $mod) return true;
        return false;

    }
}
