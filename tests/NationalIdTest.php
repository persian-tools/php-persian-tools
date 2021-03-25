<?php

namespace PersianTools\Tests;

use PersianTools\PersianTools;
use PHPUnit\Framework\TestCase;

class NationalIdTest extends TestCase
{
    public function testNationalId()
    {
        $this->assertFalse(PersianTools::verifyIranianNationalId(123000000));
        $this->assertFalse(PersianTools::verifyIranianNationalId('0000000000'));
        $this->assertFalse(PersianTools::verifyIranianNationalId('0684159415'));
        $this->assertFalse(PersianTools::verifyIranianNationalId('068415941'));

        $this->assertTrue(PersianTools::verifyIranianNationalId('0790419904'));
        $this->assertTrue(PersianTools::verifyIranianNationalId('0084575948'));
        $this->assertTrue(PersianTools::verifyIranianNationalId('0963695398'));
        $this->assertTrue(PersianTools::verifyIranianNationalId('0684159414'));
        $this->assertTrue(PersianTools::verifyIranianNationalId('0067749828'));
        $this->assertTrue(PersianTools::verifyIranianNationalId('0650451252'));
        $this->assertTrue(PersianTools::verifyIranianNationalId('1583250689'));
        $this->assertTrue(PersianTools::verifyIranianNationalId('0076229645'));
        $this->assertTrue(PersianTools::verifyIranianNationalId('4271467685'));
        $this->assertTrue(PersianTools::verifyIranianNationalId('0200203241'));
    }
}
