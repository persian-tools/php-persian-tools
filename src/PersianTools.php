<?php

namespace PersianTools;

use PersianTools\Traits\RemoveOrdinalSuffix;
use PersianTools\Traits\WordsToNumber;
use PersianTools\Traits\URLfix;
use PersianTools\Traits\Commas;
use PersianTools\Traits\NationalId;
use PersianTools\Traits\PhoneNumber;

class PersianTools
{
    use RemoveOrdinalSuffix,
        WordsToNumber,
        URLfix,
        Commas,
        PhoneNumber,
        NationalId;
}
