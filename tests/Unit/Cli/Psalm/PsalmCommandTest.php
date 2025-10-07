<?php

declare(strict_types=1);

namespace LunaPress\WpStaticAnalysis\Tests\Unit\Cli\Psalm;

use LunaPress\WpStaticAnalysis\Cli\Psalm\PsalmCommand;
use LunaPress\WpStaticAnalysis\Tests\Util\ExposeProtectedMethods;
use Override;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use ReflectionException;

/**
 * Test class for PsalmCommand.
 */
#[CoversClass(PsalmCommand::class)]
final class PsalmCommandTest extends TestCase
{
    use ExposeProtectedMethods;

    private PsalmCommand $command;

    /**
     * @inheritDoc
     */
    #[Override]
    protected function setUp(): void
    {
        parent::setUp();

        $this->command = new PsalmCommand();
    }

    /**
     * Tests the getBinaryName method
     *
     * @return void
     * @throws ReflectionException
     */
    public function testGetBinaryName(): void
    {
        $this->assertSame('psalm', $this->callProtectedMethod($this->command, 'getBinaryName'));
    }
}
