<?php

declare(strict_types=1);

namespace LunaPress\WpStaticAnalysis\Cli\PHPCS;

use Override;
use Symfony\Component\Console\Attribute\AsCommand;

/**
 * Command for running PHP_CodeSniffer Beautifier and Fixer
 */
#[AsCommand(
    name: 'phpcbf',
    description: 'Run PHP_CodeSniffer Beautifier and Fixer with custom standards'
)]
final class PhpcbfCommand extends AbstractPhpcsCommand
{
    /**
     * @inheritDoc
     */
    #[Override]
    protected function getBinaryName(): string
    {
        return 'phpcbf';
    }
}
