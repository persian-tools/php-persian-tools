<?php

namespace PersianTools\Tests;

use PersianTools\PersianTools;
use PHPUnit\Framework\TestCase;

class GetBankNameFromCardNumberTest extends TestCase
{
    public function testGetBankNameFromCardNumber()
    {
        $this->assertEquals("بانک کشاورزی", PersianTools::getBankNameFromCardNumber('6037701689095443'));
        $this->assertEquals("بانک سامان", PersianTools::getBankNameFromCardNumber('6219861034529007'));
        $this->assertNull(PersianTools::getBankNameFromCardNumber('621986103452900'));
        $this->assertNull(PersianTools::getBankNameFromCardNumber('9999991034529007'));
    }
}
