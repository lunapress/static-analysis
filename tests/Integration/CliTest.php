<?php

declare(strict_types=1);

namespace LunaPress\WpStaticAnalysis\Tests\Integration;

use LunaPress\WpStaticAnalysis\Tests\Util\Filesystem;
use Override;
use PHPUnit\Framework\TestCase;

final class CliTest extends TestCase
{
    private static string $projectRoot;
    private static string $binPath;

    #[Override]
    public static function setUpBeforeClass(): void
    {
        parent::setUpBeforeClass();

        $projectRoot = realpath(__DIR__ . '/Project');
        self::assertNotFalse($projectRoot, 'Project root path not found');
        self::$projectRoot = $projectRoot;

        exec("composer install -d " . self::$projectRoot . " --no-interaction", $output, $code);
        self::assertEquals(0, $code, 'Project dependencies install failed');

        self::$binPath = self::$projectRoot . '/vendor/bin/lunapress-static-analysis';
    }

    public function testExecuteSuccessful(): void
    {
        exec("cd " . self::$projectRoot . " && " . self::$binPath . " phpcs -- src/correct", $output, $status);
        $this->assertEquals(0, $status);
        $this->assertStringContainsString('(100%)', implode("\n", $output));
    }

    public function testExecuteFailure(): void
    {
        exec("cd " . self::$projectRoot . " && " . self::$binPath . " phpcs -- src/incorrect", $output, $status);
        $this->assertEquals(1, $status);
        $this->assertStringContainsString('ERROR', implode("\n", $output));
    }

    #[Override]
    public static function tearDownAfterClass(): void
    {
        Filesystem::deleteFolder(self::$projectRoot . '/vendor');
        parent::tearDownAfterClass();
    }
}
