Laravel Zero
================

Laravel Zero was created by, and is maintained by [Nuno Maduro](https://github.com/nunomaduro), and is a micro-framework that provides an elegant starting point for your next console application.
**Unofficial** and customized version of Laravel optimized for building console/shell/command-line applications.

<p align="center">
  <a href="https://styleci.io/repos/96572957"><img src="https://styleci.io/repos/96572957/shield" alt="StyleCI Status"></img></a>
  <a href="https://travis-ci.org/nunomaduro/zero-framework"><img src="https://img.shields.io/travis/nunomaduro/zero-framework/stable.svg?style=flat-square" alt="Build Status"></img></a>
  <a href="https://scrutinizer-ci.com/g/nunomaduro/zero-framework"><img src="https://img.shields.io/scrutinizer/g/nunomaduro/zero-framework.svg?style=flat-square" alt="Quality Score"></img></a>
  <a href="https://packagist.org/packages/nunomaduro/zero-framework"><img src="https://poser.pugx.org/nunomaduro/zero-framework/v/stable.svg" alt="Latest Stable Version"></a>
  <a href="LICENSE"><img src="https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square" alt="Software License"></img></a>
</p>

- Build on top of the [Laravel 5](http://laravel.com) components.
- Built with [PHP 7](http://php.net) using modern coding standards.
- Ships with a [standalone compiler](#build-an-standalone).
- Automatic Dependency Injection on commands and support of [Laravel 5](http://laravel.com) Service Providers.
- Supports [desktop notifications](https://github.com/nunomaduro/laravel-zero) on Linux, Windows or MacOS.

<p align="center">
    <img title="Terminal icon" src="https://raw.githubusercontent.com/nunomaduro/laravel-zero-docs/master/images/logo.png" />
</p>

Feel free to check out the [change log](CHANGELOG.md), [releases](nunomaduro/laravel-zero/releases), [license](LICENSE), and [contribution guidelines](CONTRIBUTING.md).

## Installation && Usage

[PHP](https://php.net) 7.1+

To get the latest version of Laravel Zero, simply create a new project using [Composer](https://getcomposer.org):

```bash
$ composer create-project --prefer-dist nunomaduro/laravel-zero application
```

Place yourself into the application folder, and execute the application:

```bash
$ php application
```

Laravel Zero provides a default command placed in app/DefaultCommand.php

You may review the documentation of the Artisan Console component [on Laravel Official Website](https://laravel.com/docs/5.4/artisan).

<a name="configuration"></a>

## Elegant configuration

The configuration of your console application goes on `config\config.php`. On this file, you should
define your application list of commands and your Laravel Service Providers configuration.

```php
        /*
         * Here goes the application name.
         */
        'name' => 'Laravel Zero',

        /*
         * Here goes the application version.
         */
        'version' => '1.0.0',

        /*
         * Here goes the application default command.
         *
         * You may want to remove this line in order to ask the user what command he
         * wants to execute.
         */
        'default-command' => App\DefaultCommand::class,

        /*
         * Here goes the application list of commands.
         *
         * Besides the default command the user can also call
         * any of the commands specified below.
         */
        'commands' => [
            ZeroFramework\Commands\Builder::class,
            ZeroFramework\Commands\Renamer::class,
        ],

        /*
         * Here goes the application goes the list of Laravel Service
         * Providers. Enjoy all the power of Laravel on your console.
         */
        'providers' => [
            \NunoMaduro\LaravelDesktopNotifier\LaravelDesktopNotifierServiceProvider::class,
        ],
```

<a name="build-an-standalone"></a>
## Build an standalone

Your Laravel Zero project, by default, allows you to build an standalone application.

```sh
$ php application build <name>
```

The build will provide you can a single executable, ready to use, of your application.

## Git branching model

The git branching model used for development is the one described and assisted by `twgit` tool: [https://github.com/Twenga/twgit](https://github.com/Twenga/twgit).

## Stay In Touch

For latest releases and announcements, follow on Twitter: [@enunomaduro](https://twitter.com/enunomaduro)

## Credits

This project uses code from several open source packages.

- [Laravel](https://laravel.com)
- [Symfony](http://symfony.com)
- [JoliNotif - Send notifications to your desktop](https://github.com/jolicode/JoliNotif)

## License

Laravel Zero is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

Copyright (c) 2017-2017 Nuno Maduro
