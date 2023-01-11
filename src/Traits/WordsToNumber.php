<?php

namespace PersianTools\Traits;

trait WordsToNumber
{
    use RemoveOrdinalSuffix;

    /**
     * Convert to numbers
     *
     * @param string $words
     * @param string $digits
     * @param boolean $shouldAddCommas
     * @param boolean $isFuzzyEnabled
     * @return null|string words to number. e.g: 350000
     */
    public static function wordsToNumber(string $words, string $digits = 'en', bool $shouldAddCommas = false, bool $isFuzzyEnabled = false)
    {
        if (empty($words)) {
            return null;
        }

        return static::removeOrdinalSuffix($words);
    }
}
