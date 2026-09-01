<?php
/**
 * Tests for ChainLinkPlus
 */

use PHPUnit\Framework\TestCase;
use Chainlinkplus\Chainlinkplus;

class ChainlinkplusTest extends TestCase {
    private Chainlinkplus $instance;

    protected function setUp(): void {
        $this->instance = new Chainlinkplus(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Chainlinkplus::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
