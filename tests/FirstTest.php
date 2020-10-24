<?php


namespace App\Tests;


use App\Service\TestService;
use PHPUnit\Framework\TestCase;

class FirstTest extends TestCase
{
    public function test()
    {
        $service = new TestService();

        $this->assertEquals("hi", $service->test());
    }



}