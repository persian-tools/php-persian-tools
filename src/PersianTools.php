<?php

namespace PersianTools;

use PersianTools\Traits\Commas;
use PersianTools\Traits\URLfix;
use PersianTools\Traits\NationalId;
use PersianTools\Traits\PhoneNumber;
use PersianTools\Traits\WordsToNumber;
use PersianTools\Traits\ConvertNumbers;
use PersianTools\Traits\VerifyCardNumber;
use PersianTools\Traits\RemoveOrdinalSuffix;
use PersianTools\Traits\GetBankNameFromCardNumber;

class PersianTools
{
    use RemoveOrdinalSuffix,
        WordsToNumber,
        URLfix,
        Commas,
        PhoneNumber,
        NationalId,
        VerifyCardNumber,
        GetBankNameFromCardNumber,
        ConvertNumbers;
}
