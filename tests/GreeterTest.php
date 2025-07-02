<?php

use PHPUnit\Framework\TestCase;
use App\Greeter;

class GreeterTest extends TestCase
{
    private Greeter $greeter;

    protected function setUp(): void
    {
        $this->greeter = new Greeter();
    }
    public function testGreetReturnsExpectedString(): void
    {
        $this->assertSame('Hello from src!', $this->greeter->greet());
    }
}
