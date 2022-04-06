<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
class CITest extends TestCase
{
    public function testCI(){
        $swagTest = new SwagTest();
        $val = $swagTest->testCI();
        static::assertEquals(42, $val);
    }

}