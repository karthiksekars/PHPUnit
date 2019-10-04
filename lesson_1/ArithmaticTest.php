<?php

use PHPUnit\Framework\TestCase;

require 'Arithmatic.php';

class ArithmaticTest extends TestCase {

    private $arithmatic;

    protected function setUp(): void {
        $this->arithmatic = new Arithmatic();
    }

    protected function tearDown(): void {
        $this->arithmatic = NULL;
    }

    public function testAdd() {
        $result = $this->arithmatic->add(1, 2);
        $this->assertEquals(3, $result);
    }

}
