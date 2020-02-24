# Process Runner

[![Latest Version](https://badgen.net/packagist/v/kodekeep/process-runner)](https://packagist.org/packages/kodekeep/process-runner)
[![Software License](https://badgen.net/packagist/license/kodekeep/process-runner)](https://packagist.org/packages/kodekeep/process-runner)
[![Build Status](https://img.shields.io/github/workflow/status/kodekeep/process-runner/run-tests?label=tests)](https://github.com/kodekeep/process-runner/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Coverage Status](https://badgen.net/codeclimate/coverage/kodekeep/process-runner)](https://codeclimate.com/github/kodekeep/process-runner)
[![Quality Score](https://badgen.net/codeclimate/maintainability/kodekeep/process-runner)](https://codeclimate.com/github/kodekeep/process-runner)
[![Total Downloads](https://badgen.net/packagist/dt/kodekeep/process-runner)](https://packagist.org/packages/kodekeep/process-runner)

This package was created by, and is maintained by [Brian Faust](https://github.com/faustbrian), and provides an easy to use and test process runner.

## Installation

```bash
composer require kodekeep/process-runner
```

## Usage

See our [tests](https://github.com/kodekeep/process-runner/tree/master/tests) for usage examples.

### Laravel

When you are using this package within Laravel you can use [Real-Time Facades](https://laravel.com/docs/6.x/facades#real-time-facades) to get the benefits of the mocking utilities that are available to facades.

```php
use \Facades\KodeKeep\ProcessRunner\ProcessRunners\ProcessRunner;
```

This means that you can simply use the the underlying methods exposed through a facade to mock your results instead of having to use the `MockProcessRunner`.

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@kodekeep.com. All security vulnerabilities will be promptly addressed.

## Credits

This project exists thanks to all the people who [contribute](../../contributors).

## Support Us

We invest a lot of resources into creating and maintaining our packages. You can support us and the development through [GitHub Sponsors](https://github.com/sponsors/faustbrian).

## License

Process Runner is an open-sourced software licensed under the [MPL-2.0](LICENSE.md).
