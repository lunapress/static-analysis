<?php

declare(strict_types=1);

namespace LunaPress\WpStaticAnalysis\Tests\Unit\Cli\ConfigLocator;

use LunaPress\WpStaticAnalysis\Cli\ConfigLocator\AbstractConfigLocator;
use Override;

final class TestableAbstractConfigLocator extends AbstractConfigLocator
{
    /**
     * @inheritDoc
     */
    #[Override]
    protected function getProjectConfigPaths(): array
    {
        return [
            '.config/test.xml',
        ];
    }

    /**
     * @inheritDoc
     */
    #[Override]
    protected function getDefaultConfigPath(): string
    {
        return 'defaultPath';
    }
}
