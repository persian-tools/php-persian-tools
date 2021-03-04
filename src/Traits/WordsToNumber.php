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
     * @return Converted words to number. e.g: 350000
     */
    static public function wordsToNumber(string $words, string $digits = 'en', bool $shouldAddCommas = false, bool $isFuzzyEnabled = false)
    {
        if (empty($words)) {
            return null;
        }

        $words = static::removeOrdinalSuffix($words);

        return $words;
    }
}
