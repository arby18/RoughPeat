<?php
/**
 * Tests for RoughPeat
 */

use PHPUnit\Framework\TestCase;
use Roughpeat\Roughpeat;

class RoughpeatTest extends TestCase {
    private Roughpeat $instance;

    protected function setUp(): void {
        $this->instance = new Roughpeat(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Roughpeat::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
