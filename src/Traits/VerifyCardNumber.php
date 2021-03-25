<?php

namespace PersianTools\Traits;

trait VerifyCardNumber
{
    /**
     * verify card number
     *
     * @param  $digits
     * @return bool
     */
    static public function verifyCardNumber($digits)
    {
       if (strlen($digits) != 16 ||
            intval(substr($digits, 1, 11)) == 0 ||
            intval(substr($digits, 10)) == 0)
                return false;
        $sum = 0;
        for ($i = 0; $i < 16; $i++) {
            $even = $i % 2 == 0 ? 2 : 1;
            $subDigit = intval($digits[$i]) * $even;
            $sum += $subDigit > 9 ? $subDigit - 9 : $subDigit;
        }
        return $sum % 10 == 0;
    }
}
