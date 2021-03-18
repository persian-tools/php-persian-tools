<?php

namespace PersianTools;

use PersianTools\Traits\RemoveOrdinalSuffix;
use PersianTools\Traits\WordsToNumber;
use PersianTools\Traits\URLfix;
use PersianTools\Traits\Commas;

class PersianTools
{
    use RemoveOrdinalSuffix,
        WordsToNumber,
        URLfix,
        Commas;
}
