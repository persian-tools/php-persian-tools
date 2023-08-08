<?php

namespace PersianTools;

use PersianTools\Traits\RemoveOrdinalSuffix;
use PersianTools\Traits\WordsToNumber;
use PersianTools\Traits\URLfix;
use PersianTools\Traits\Commas;
use PersianTools\Traits\GetBankNameFromCardNumber;
use PersianTools\Traits\NationalId;
use PersianTools\Traits\PersianString;
use PersianTools\Traits\PhoneNumber;
use PersianTools\Traits\VerifyCardNumber;

class PersianTools
{
    use RemoveOrdinalSuffix,
        WordsToNumber,
        URLfix,
        Commas,
        PhoneNumber,
        NationalId,
        PersianString,
        VerifyCardNumber,
        GetBankNameFromCardNumber;
}
