<?php

namespace PersianTools\Traits;

trait URLfix
{
    /**
     * fix url
     *
     * @param  string  $url
     * @return string
     */
    public static function URLfix(string $url)
    {
        return urldecode($url);
    }
}
