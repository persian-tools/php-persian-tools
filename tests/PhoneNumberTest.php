<?php

namespace PersianTools\Tests;

use PersianTools\PersianTools;
use PHPUnit\Framework\TestCase;

class PhoneNumberTest extends TestCase
{
    public function testGetPhonePrefix()
    {
        $this->assertEquals('902', PersianTools::getPhonePrefix('09022002580'));
        $this->assertEquals('912', PersianTools::getPhonePrefix('09122002580'));
        $this->assertEquals('998', PersianTools::getPhonePrefix('09981000000'));
        $this->assertEquals('912', PersianTools::getPhonePrefix('09123200007'));
        $this->assertEquals('930', PersianTools::getPhonePrefix('09300880440'));
        $this->assertEquals('902', PersianTools::getPhonePrefix('+989022002580'));
        $this->assertEquals('912', PersianTools::getPhonePrefix('989122002580'));
        $this->assertEquals('', PersianTools::getPhonePrefix('000989022002580'));
        $this->assertEquals('', PersianTools::getPhonePrefix(''));
    }
}
