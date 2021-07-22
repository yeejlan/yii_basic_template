<?php


use PHPUnit\Framework\TestCase;

class SimpleTest extends TestCase
{
    public function test1() 
    {
        $this->assertSame(1, 1);
    }
}