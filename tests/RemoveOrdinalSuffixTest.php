<?php

namespace PersianTools\Tests;

use PersianTools\PersianTools;
use PHPUnit\Framework\TestCase;

class RemoveOrdinalSuffixTest extends TestCase
{
    public function testRemoveOrdinalSuffix()
    {
        $this->assertEquals('چهل و سه', PersianTools::removeOrdinalSuffix('چهل و سوم'));
	    $this->assertEquals('چهل و پنج', PersianTools::removeOrdinalSuffix('چهل و پنجم'));
        $this->assertEquals('سی', PersianTools::removeOrdinalSuffix('سی اُم'));

        $this->assertNull(PersianTools::removeOrdinalSuffix(''));
    }
}
