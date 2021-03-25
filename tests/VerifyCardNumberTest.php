<?php

namespace PersianTools\Tests;

use PersianTools\PersianTools;
use PHPUnit\Framework\TestCase;

class VerifyCardNumberTest extends TestCase
{
    public function testVerifyCardNumber()
    {
        $this->assertTrue(PersianTools::VerifyCardNumber('6037701689095443'));
        $this->assertTrue(PersianTools::VerifyCardNumber('6219861034529007'));
        $this->assertFalse(PersianTools::VerifyCardNumber('6219861034529008'));
        $this->assertFalse(PersianTools::VerifyCardNumber('621986103452900'));
        $this->assertFalse(PersianTools::VerifyCardNumber('621986103452900712'));
        $this->assertFalse(PersianTools::VerifyCardNumber('0'));
    }
}
