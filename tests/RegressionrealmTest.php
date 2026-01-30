<?php
/**
 * Tests for RegressionRealm
 */

use PHPUnit\Framework\TestCase;
use Regressionrealm\Regressionrealm;

class RegressionrealmTest extends TestCase {
    private Regressionrealm $instance;

    protected function setUp(): void {
        $this->instance = new Regressionrealm(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Regressionrealm::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
