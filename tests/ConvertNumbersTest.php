<?php

namespace PersianTools\Tests;

use PersianTools\PersianTools;
use PHPUnit\Framework\TestCase;

class ConvertNumbersTest extends TestCase
{
    private static $en_nums;
    private static $fa_nums;
    private static $ar_nums;

    protected function setUp(): void
    {
        self::$fa_nums = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
        self::$en_nums = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
        self::$ar_nums = ['٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩'];
    }

    public function testPersianToEnglish(): void
    {
        $this->assertEquals(self::$en_nums, PersianTools::persianToEnglish(self::$fa_nums));
    }

    public function testEnglishToPersian(): void
    {
        $this->assertEquals(self::$fa_nums, PersianTools::englishToPersian(self::$en_nums));
    }

    public function testPersianToArabic(): void
    {
        $this->assertEquals(self::$ar_nums, PersianTools::persianToArabic(self::$fa_nums));
    }

    public function testArabicToPersian(): void
    {
        $this->assertEquals(self::$fa_nums, PersianTools::arabicToPersian(self::$ar_nums));
    }

    public function testEnglishToArabic(): void
    {
        $this->assertEquals(self::$ar_nums, PersianTools::englishToArabic(self::$en_nums));
    }

    public function testArabicToEnglish(): void
    {
        $this->assertEquals(self::$en_nums, PersianTools::arabicToEnglish(self::$ar_nums));
    }
}