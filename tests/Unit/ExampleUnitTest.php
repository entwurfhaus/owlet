<?php

namespace Tests\Unit;

use entwurfhaus\owlet\Models\Example;
use PHPUnit\Framework\TestCase;

class ExampleUnitTest extends TestCase {
    public function testExample() {
        $example = new Example('Hello World');

        $this->assertSame('Hello World', $example->getMessage());
    }
}
