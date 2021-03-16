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
    static public function URLfix(string $url)
    {
        return urldecode($url);
    }
}
