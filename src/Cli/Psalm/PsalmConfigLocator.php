<?php

declare(strict_types=1);

namespace LunaPress\WpStaticAnalysis\Cli\Psalm;

use LunaPress\WpStaticAnalysis\Cli\ConfigLocator\AbstractConfigLocator;
use LunaPress\WpStaticAnalysis\Util\Package;
use Override;

final class PsalmConfigLocator extends AbstractConfigLocator
{
    /**
     * @inheritDoc
     */
    #[Override]
    protected function getDefaultConfigPath(): string
    {
        return Package::ROOT_DIR . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'psalm.xml';
    }

    /**
     * @inheritDoc
     */
    #[Override]
    protected function getProjectConfigPaths(): array
    {
        return [
            '.config/psalm.xml',
            '.config/psalm.xml.dist',
        ];
    }
}
