<?php

use PHPUnit\Framework\TestCase;

class AnywayTest extends TestCase
{
    public function test_it_proxies_function_call()
    {
        $expected = implode('-', [1, 2, 3]);

        $result = Anyway::implode('-', [1, 2, 3]);

        $this->assertEquals($expected, $result);
    }

    public function test_it_retries_with_reversed_arguments()
    {
        $expected = implode('-', [1, 2, 3]);

        $result = Anyway::implode([1, 2, 3], '-');

        $this->assertEquals($expected, $result);
    }

    public function test_it_does_not_silence_exception_when_it_should_not()
    {
        $this->expectException(TypeError::class);

        $result = Anyway::implode([1, 2, 3], ['-']);
    }

}
