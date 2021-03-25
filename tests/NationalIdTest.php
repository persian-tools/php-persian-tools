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

        // https://www.yjc.ir/fa/news/6787095/%D8%B1%D9%86%D8%AF%D8%AA%D8%B1%DB%8C%D9%86-%D8%B4%D9%85%D8%A7%D8%B1%D9%87-%D9%85%D9%84%DB%8C-%DA%A9%D8%B4%D9%88%D8%B1-%D8%B1%D8%A7-%D8%A8%D8%B4%D9%86%D8%A7%D8%B3%DB%8C%D8%AF
        $this->assertTrue(PersianTools::verifyIranianNationalId('1111111111'));

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
