<?php
/**
 * Tests for OutlineShoal
 */

use PHPUnit\Framework\TestCase;
use Outlineshoal\Outlineshoal;

class OutlineshoalTest extends TestCase {
    private Outlineshoal $instance;

    protected function setUp(): void {
        $this->instance = new Outlineshoal(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Outlineshoal::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
