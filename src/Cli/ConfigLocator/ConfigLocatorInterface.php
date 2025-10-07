<?php

declare(strict_types=1);

namespace LunaPress\WpStaticAnalysis\Cli\ConfigLocator;

interface ConfigLocatorInterface
{
    /**
     * Locate standard file
     *
     * @param string|null $customFile Custom standard path (relative to base path)
     * @return string
     */
    public function locate(?string $customFile = null): string;
}
