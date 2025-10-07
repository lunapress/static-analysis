<?php

declare(strict_types=1);

namespace LunaPress\WpStaticAnalysis\Tests\Unit\Cli\Command;

use LunaPress\WpStaticAnalysis\Cli\Command\AbstractCommand;
use LunaPress\WpStaticAnalysis\Cli\Factory\Process\ProcessFactoryInterface;
use Override;

/**
 * Implementation of AbstractCommand for testing purposes.
 *
 * @psalm-suppress ClassMustBeFinal
 */
final class TestableAbstractCommand extends AbstractCommand
{
    public const BIN = 'wow';

    /**
     * @inheritDoc
     */
    #[Override]
    protected function getBinaryName(): string
    {
        return self::BIN;
    }

    public function publicFindBinary(): string
    {
        return parent::findBinary();
    }

    public function getProcessFactory(): ProcessFactoryInterface
    {
        return $this->processFactory;
    }
}
