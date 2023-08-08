<?php

namespace PersianTools\Traits;

trait PersianString
{
    /**
     * Check if string has one or more persian characters
     *
     * @param  $string
     * @return bool
     */
    static public function hasPersian($string)
    {
        $persianChs = explode(' ', 'ا ب پ ت ث ج چ ح خ د ذ ر ز ژ ص ض ط ظ ع غ ف ق ک گ ل م ن و ه ی');
        foreach ($persianChs as $ch) {
            if (strpos($string, $ch) !== false) {
                return true;
            }
        }
        return false;
    }



    /**
     * Check if string is completely persian
     *
     * @param  $string
     * @return bool
     */
    static public function isPersian($string)
    {
        // $persianChs = explode(' ', 'ا ب پ ت ث ج چ ح خ د ذ ر ز ژ ص ض ط ظ ع غ ف ق ک گ ل م ن و ه ی');
        // $symbolsChs = explode(' ', '! @ # $ % ٪ ^ & * ( ) - _ + = [ { ] } / . . , < > ، ٌ ٍ ً ُ ِ : ; . ,');
        // $string = str_replace($symbolsChs, null, $string);
        // $stringChs = str_split(trim($string));
        // foreach ($stringChs as $ch) {
        //     if (array_search($ch, $persianChs) === false) {
        //     echo $ch;
        //     	return false;
        //     }
        // }
        // return true;
    }
}
