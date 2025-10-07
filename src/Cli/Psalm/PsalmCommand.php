<?php

declare(strict_types=1);

namespace LunaPress\WpStaticAnalysis\Cli\Psalm;

use Override;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(
    name: 'psalm',
    description: 'Run Psalm with default config'
)]
final class PsalmCommand extends AbstractPsalmCommand
{
    /**
     * @inheritDoc
     */
    #[Override]
    protected function getBinaryName(): string
    {
        return 'psalm';
    }
}
