<?php

declare(strict_types=1);

namespace LunaPress\WpStaticAnalysis\Tests\Unit\Cli\Factory\Process;

use LunaPress\WpStaticAnalysis\Cli\Factory\Process\ProcessFactoryInterface;
use Override;
use PHPUnit\Framework\MockObject\MockObject;
use Symfony\Component\Process\Process;

/**
 * Mock factory that returns predefined Process instances
 * Used for testing classes that depend on ProcessFactoryInterface
 */
final class MockProcessFactory implements ProcessFactoryInterface
{
    private Process $mock;

    public function __construct(Process $mock)
    {
        $this->mock = $mock;
    }

    /**
     * @inheritDoc
     */
    #[Override]
    public function create(array $command, ?string $cwd = null, ?array $env = null): Process
    {
        return $this->mock;
    }
}
