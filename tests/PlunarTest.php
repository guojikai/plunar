<?php

namespace Plunar\tests;

use Plunar\Plunar;

class PlunarTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @expectedException \Plunar\PlunarException
     */
    public function testIsValidDateException()
    {
        Plunar::solarToLunar(1816, 1, 26);
    }

    /**
     * @expectedException \Plunar\PlunarException
     */
    public function testIsValidDateExceptionLess()
    {
        Plunar::solarToLunar(1891, 2, 8);
    }

    /**
     * @expectedException \Plunar\PlunarException
     */
    public function testIsValidDateExceptionThan()
    {
        Plunar::solarToLunar(2100, 2, 10);
    }

    public function testSolarToLunar()
    {
        $this->assertEquals(
            array('一九八四', '八月', '廿七', '甲子', '鼠', '闰十月', array(1984, 8, 27)),
            Plunar::solarToLunar(1984, 9, 22));
        $this->assertEquals(
            array('二零一五', '腊月', '十七', '乙未', '羊', 0, array(2015, 12, 17)),
            Plunar::solarToLunar(2016, 1, 26));
        $this->assertEquals(
            array('一九零零', '冬月', '十一', '庚子', '鼠', '闰八月', array(1900, 12, 11)),
            Plunar::solarToLunar(1901, 1, 1));
        $this->assertEquals(
            array('一九九九', '冬月', '廿五', '己卯', '兔', 0, array(1999, 11, 25)),
            Plunar::solarToLunar(2000, 1, 1));
    }

    public function testToYear()
    {
        $this->assertEquals('一九零一', Plunar::toYear(1901));
        $this->assertEquals('二零零零', Plunar::toYear(2000));
        $this->assertEquals('二一零零', Plunar::toYear(2100));
    }
}
