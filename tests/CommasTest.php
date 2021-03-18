<?php

namespace PersianTools\Tests;

use PersianTools\PersianTools;
use PHPUnit\Framework\TestCase;

class CommasTest extends TestCase
{
    public function testAddCommas()
    {
        $this->assertEquals('30,000,000', PersianTools::addCommas(30000000));
        $this->assertEquals('30,000,000', PersianTools::addCommas('30,000,000'));
        $this->assertEquals('30,000,000.02', PersianTools::addCommas(30000000.02));
        $this->assertEquals('30,000,000.002', PersianTools::addCommas(30000000.002));
        $this->assertEquals('30,000,000.002', PersianTools::addCommas('30,000,000.002'));
        $this->assertEquals('', PersianTools::addCommas(''));
    }

    public function testRemoveCommas()
    {
        $this->assertEquals(30000000, PersianTools::removeCommas('30,000,000'));
        $this->assertEquals(30000000.02, PersianTools::removeCommas('30,000,000.02'));
        $this->assertEquals(300, PersianTools::removeCommas('300'));
        $this->assertEquals('', PersianTools::removeCommas(''));
    }

}
