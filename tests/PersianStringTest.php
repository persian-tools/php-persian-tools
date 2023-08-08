<?php

namespace PersianTools\Tests;

use PersianTools\PersianTools;
use PHPUnit\Framework\TestCase;

class PersianStringTest extends TestCase
{
    public function testNationalId()
    {
        $this->assertEquals(true, PersianTools::hasPersian('سلام i am multilang جمله.'));
        $this->assertEquals(true, PersianTools::isPersian('سلام من فقط فارسی هستم.('));

        $this->assertEquals(false, PersianTools::hasPersian('hello world, without any persian characters!'));
        $this->assertEquals(false, PersianTools::isPersian('hello world, from another verse.'));
    }
}
