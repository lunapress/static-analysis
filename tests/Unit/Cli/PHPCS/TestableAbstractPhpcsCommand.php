<?php

declare(strict_types=1);

namespace LunaPress\WpStaticAnalysis\Tests\Unit\Cli\PHPCS;

use LunaPress\WpStaticAnalysis\Cli\ConfigLocator\ConfigLocatorInterface;
use LunaPress\WpStaticAnalysis\Cli\PHPCS\AbstractPhpcsCommand;
use Override;

final class TestableAbstractPhpcsCommand extends AbstractPhpcsCommand
{
    public const BIN = 'test';

    /**
     * @return string
     *
     * @psalm-return 'test'
     */
    #[Override]
    protected function getBinaryName(): string
    {
        return self::BIN;
    }

    /**
     * @return ConfigLocatorInterface
     */
    public function getConfigLocator(): ConfigLocatorInterface
    {
        return $this->configLocator;
    }

    /**
     * @return string
     */
    #[Override]
    public function getConfigOptionName(): string
    {
        return parent::getConfigOptionName();
    }

    /**
     * @return string
     */
    #[Override]
    public function getToolConfigFlag(): string
    {
        return parent::getToolConfigFlag();
    }

    /**
     * @return string
     */
    #[Override]
    public function getToolArgumentsDescription(): string
    {
        return parent::getToolArgumentsDescription();
    }

    /**
     * @return string
     */
    #[Override]
    public function getConfigOptionDescription(): string
    {
        return parent::getConfigOptionDescription();
    }
}
