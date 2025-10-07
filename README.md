# LunaPress Static Analysis

### TODO

- [ ] Psalm plugin for autoregistration of installed `lunapress/*-stubs`
- [ ] Rector CLI

### Install

```shell
composer require --dev lunapress/static-analysis
```

### Required

- PHP 8.3+

## CLI

### PHP_CodeSniffer

```shell
vendor/bin/lunapress-static-analysis phpcs [OPTIONS] -- [<PHPCS-ARGS>...]
```

```shell
vendor/bin/lunapress-static-analysis phpcbf [OPTIONS] -- [<PHPCS-ARGS>...]
```

`[PHPCS-ARGS]`: Arguments from [PHP_CodeSniffer](https://github.com/PHPCSStandards/PHP_CodeSniffer/wiki/Usage)

`[OPTIONS]`:

- `--ruleset` - Path to the custom `ruleset.xml` file relative to the project

If `--ruleset` is not present, it checks the files in order of priority:

1. `.config/.phpcs.xml`
2. `.config/phpcs.xml`
3. `.config/.phpcs.xml.dist`
4. `.config/phpcs.xml.dist`
5. `LunaPressStandard` is automatically applied

#### Example

```
vendor/bin/lunapress-static-analysis phpcs --ruleset=./phpcs/example.xml -- --colors
```

#### Overriding rules

`.config/phpcs.xml`
```xml
<?xml version="1.0"?>
<ruleset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" name="LunaPress Standard Override" namespace="LunaPressStandard\Override" xsi:noNamespaceSchemaLocation="https://raw.githubusercontent.com/squizlabs/PHP_CodeSniffer/master/phpcs.xsd">
    <rule ref="LunaPressStandard">
    </rule>

    <!-- Arguments -->
    <arg name="extensions" value="php" />
    <arg name="report" value="summary" />
    <arg name="colors" />
    <arg name="cache" />
    <arg value="sp" />
</ruleset>
```

### Psalm

```shell
vendor/bin/lunapress-static-analysis psalm [OPTIONS] -- [<PSALM-ARGS>...]
```

`[PSALM-ARGS]`: Arguments from [Psalm](https://psalm.dev/docs/running_psalm/command_line_usage/)

`[OPTIONS]`:

- `--config` - Path to the custom `psalm.xml` file relative to the project

If `--config` is not present, it checks the files in order of priority:

1. `.config/psalm.xml`
2. `.config/psalm.xml.dist`
3. Default config from this package `config/psalm.xml`

#### Example

```
vendor/bin/lunapress-static-analysis psalm --config=./phpcs/example.xml -- --help
```