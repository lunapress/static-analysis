<?php

declare(strict_types=1);

namespace LunaPress\WpStaticAnalysis\Cli\PHPCS;

use LunaPress\WpStaticAnalysis\Cli\ConfigLocator\AbstractConfigLocator;
use Override;

/**
 * Locates PHPCS standard files with fallback to default standard
 */
final class StandardLocator extends AbstractConfigLocator
{
    /**
     * @inheritDoc
     */
    #[Override]
    protected function getProjectConfigPaths(): array
    {
        return [
            '.config/.phpcs.xml',
            '.config/phpcs.xml',
            '.config/.phpcs.xml.dist',
            '.config/phpcs.xml.dist',
        ];
    }

    /**
     * @inheritDoc
     */
    #[Override]
    protected function getDefaultConfigPath(): string
    {
        return 'WpOnepixStandard';
    }
}
