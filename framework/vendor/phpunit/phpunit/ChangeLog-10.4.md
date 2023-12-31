# Changes in PHPUnit 10.4

All notable changes of the PHPUnit 10.4 release series are documented in this file using the [Keep a CHANGELOG](https://keepachangelog.com/) principles.

## [10.4.0] - 2023-10-06

### Added

* [#5441](https://github.com/sebastianbergmann/phpunit/issues/5441): Baseline for `E_(USER_)DEPRECATED`, `E_(USER_)NOTICE`, `E_STRICT`, and `E_(USER_)WARNING`
* [#5462](https://github.com/sebastianbergmann/phpunit/pull/5462): Support for multiple arguments
* [#5471](https://github.com/sebastianbergmann/phpunit/issues/5471): `assertFileMatchesFormat()` and `assertFileMatchesFormatFile()`
* [#5515](https://github.com/sebastianbergmann/phpunit/issues/5515): `PHPUnit\Runner\Extension\Facade::requireExportOfObjects()` so that test runner extensions can indicate that they require the export of objects for events such as `Test\AssertionSucceeded` and `Test\AssertionFailed`
* Attribute `id` attribute for `testCaseMethod` elements in the XML document generated by `--list-tests-xml`

### Changed

* [#5505](https://github.com/sebastianbergmann/phpunit/pull/5505): Improve the failure description of `StringContains`-based assertions when the strings are encoded differently 
* [#5515](https://github.com/sebastianbergmann/phpunit/issues/5515): The `Test\AssertionSucceeded` and `Test\AssertionFailed` events are always emitted again
* [#5515](https://github.com/sebastianbergmann/phpunit/issues/5515): `--log-events-verbose-text` enables the export of non-scalar values for the `Test\AssertionSucceeded` and `Test\AssertionFailed` events
* The name of the top-level test suite that is created when a directory or file path is passed as an argument to the test runner is now `CLI Arguments`
* Simplified the failure description for `assertInstanceOf()` and `assertNotInstanceOf()`
* Simplified the failure description for `assertJson()`
* The `@codeCoverageIgnore`, `@codeCoverageIgnoreStart`, and `@codeCoverageIgnoreEnd` annotations are no longer deprecated

### Deprecated

* [#5472](https://github.com/sebastianbergmann/phpunit/issues/5472): `TestCase::assertStringNotMatchesFormat()` and `TestCase::assertStringNotMatchesFormatFile()` (these methods only have a `@deprecated` annotation for now; using these methods will trigger a deprecation warning in PHPUnit 11; these methods will be removed in PHPUnit 12)
* [#5481](https://github.com/sebastianbergmann/phpunit/issues/5481): `dataSet` attribute for `testCaseMethod` elements in the XML document generated by `--list-tests-xml` (the attribute will not be generated anymore starting with PHPUnit 11)
* [#5513](https://github.com/sebastianbergmann/phpunit/issues/5513): `IgnoreClassForCodeCoverage`, `IgnoreMethodForCodeCoverage`, and `IgnoreFunctionForCodeCoverage` attributes (these attributes will be removed in PHPUnit 11)
* `PHPUnit\TextUI\Configuration\Configuration::cliArgument()` and `PHPUnit\TextUI\Configuration\Configuration::hasCliArgument()`

[10.4.0]: https://github.com/sebastianbergmann/phpunit/compare/10.3...main
