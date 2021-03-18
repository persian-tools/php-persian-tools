<?php

namespace PersianTools\Tests;

use PersianTools\PersianTools;
use PHPUnit\Framework\TestCase;

class URLfixTest extends TestCase
{
    public function testURLfix()
    {
        $this->assertEquals('https://fa.wikipedia.org/wiki/مدیاویکی:Gadget-Extra-Editbuttons-botworks.js', PersianTools::URLfix('https://fa.wikipedia.org/wiki/%D9%85%D8%AF%DB%8C%D8%A7%D9%88%DB%8C%DA%A9%DB%8C:Gadget-Extra-Editbuttons-botworks.js'));
        $this->assertEquals('https://en.wikipedia.org/wiki/Persian_alphabet', PersianTools::URLfix('https://en.wikipedia.org/wiki/Persian_alphabet'));
        $this->assertEquals('', PersianTools::URLfix(''));
    }
}
