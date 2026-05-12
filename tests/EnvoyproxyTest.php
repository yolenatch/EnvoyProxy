<?php
/**
 * Tests for EnvoyProxy
 */

use PHPUnit\Framework\TestCase;
use Envoyproxy\Envoyproxy;

class EnvoyproxyTest extends TestCase {
    private Envoyproxy $instance;

    protected function setUp(): void {
        $this->instance = new Envoyproxy(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Envoyproxy::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
