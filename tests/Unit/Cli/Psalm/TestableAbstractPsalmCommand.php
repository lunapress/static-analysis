<?php

declare(strict_types=1);

namespace LunaPress\WpStaticAnalysis\Tests\Unit\Cli\Psalm;

use LunaPress\WpStaticAnalysis\Cli\ConfigLocator\ConfigLocatorInterface;
use LunaPress\WpStaticAnalysis\Cli\Psalm\AbstractPsalmCommand;
use Override;

final class TestableAbstractPsalmCommand extends AbstractPsalmCommand
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
