<?php

namespace Tests\Unit;

use Entwurfhaus\Owlet\Models\Example;
use PHPUnit\Framework\TestCase;

class ExampleUnitTest extends TestCase {
    public function testExample() {
        $example = new Example('Hello World');

        $this->assertSame('Hello World', $example->getMessage());
    }
}
