<?php

declare(strict_types=1);

namespace LunaPress\WpStaticAnalysis\Tests\Unit\Cli\Psalm;

use LunaPress\WpStaticAnalysis\Cli\Psalm\PsalmConfigLocator;
use LunaPress\WpStaticAnalysis\Tests\Util\ExposeProtectedMethods;
use Override;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use ReflectionException;

/**
 * Test class for PsalmConfigLocator.
 */
#[CoversClass(PsalmConfigLocator::class)]
final class PsalmConfigLocatorTest extends TestCase
{
    use ExposeProtectedMethods;

    private PsalmConfigLocator $locator;

    /**
     * @inheritDoc
     */
    #[Override]
    protected function setUp(): void
    {
        parent::setUp();

        $this->locator = new PsalmConfigLocator();
    }

    /**
     * @return void
     * @throws ReflectionException
     */
    public function testDefaultConfigPath()
    {
        /** @var string $configPath */
        $configPath = $this->callProtectedMethod($this->locator, 'getDefaultConfigPath');
        $this->assertStringContainsString('psalm.xml', $configPath);
    }

    /**
     * @return void
     * @throws ReflectionException
     */
    public function testGetProjectConfigPaths()
    {
        $this->assertIsArray(
            $this->callProtectedMethod($this->locator, 'getProjectConfigPaths')
        );
    }
}
