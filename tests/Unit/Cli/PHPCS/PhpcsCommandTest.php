<?php

declare(strict_types=1);

namespace LunaPress\WpStaticAnalysis\Tests\Unit\Cli\PHPCS;

use LunaPress\WpStaticAnalysis\Cli\Command\AbstractCommand;
use LunaPress\WpStaticAnalysis\Cli\PHPCS\PhpcsCommand;
use LunaPress\WpStaticAnalysis\Tests\Util\ExposeProtectedMethods;
use Override;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use ReflectionException;
use ReflectionMethod;

/**
 * Test class for PhpcsCommand.
 */
#[CoversClass(PhpcsCommand::class)]
final class PhpcsCommandTest extends TestCase
{
    use ExposeProtectedMethods;

    private AbstractCommand $command;

    /**
     * @inheritDoc
     */
    #[Override]
    protected function setUp(): void
    {
        parent::setUp();

        $this->command = new PhpcsCommand();
    }

    /**
     * Tests the getBinaryName method
     *
     * @return void
     * @throws ReflectionException
     */
    public function testGetBinaryName(): void
    {
        $this->assertSame('phpcs', $this->callProtectedMethod($this->command, 'getBinaryName'));
    }
}
