<?php

namespace PersianTools\Traits;

trait RemoveOrdinalSuffix
{
    /**
     * Remove Ordinal suffix in words
     * @param string $word  word String that includes ordinal suffix
     * @return A string of words that not includes Ordinal strings
     * @example
     * removeOrdinalSuffix('سه هزارم') // سه هزار
     * removeOrdinalSuffix('سه هزارمین') // سه هزار
     */
    static public function removeOrdinalSuffix(string $word)
    {
        if (empty($word)) {
            return null;
        }

        $word = preg_replace('/مین$/i', '', $word);
        $word = preg_replace('/(ام| اُم)$/i', '', $word);

        if (mb_substr($word, -3) == 'سوم') {
            $word = mb_substr($word, 0, -3).'سه';
        } else if (mb_substr($word, -1) == 'م') {
            $word = mb_substr($word, 0, -1);
        }

        return $word;
    }
}
