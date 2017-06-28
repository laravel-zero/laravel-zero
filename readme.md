Laravel Zero
================

Laravel Zero was created by, and is maintained by [Nuno Maduro](https://github.com/nunomaduro), and is a micro-framework that provides an elegant starting point for your next console application.

<p align="center">
  <a href="https://styleci.io/repos/80149647"><img src="https://styleci.io/repos/80149647/shield" alt="StyleCI Status"></img></a>
  <a href="https://travis-ci.org/nunomaduro/laravel-zero"><img src="https://img.shields.io/travis/nunomaduro/laravel-zero/stable.svg?style=flat-square" alt="Build Status"></img></a>
  <a href="https://scrutinizer-ci.com/g/nunomaduro/laravel-zero"><img src="https://img.shields.io/scrutinizer/g/nunomaduro/laravel-zero.svg?style=flat-square" alt="Quality Score"></img></a>
  <a href="LICENSE"><img src="https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square" alt="Software License"></img></a>
  <a href="https://github.com/nunomaduro/laravel-zero/releases"><img src="https://img.shields.io/github/release/nunomaduro/laravel-zero.svg?style=flat-square" alt="Latest Version"></img></a>
</p>

- Build on top of the [Laravel 5](http://laravel.com) components.
- Built with [PHP 7](http://php.net) using modern coding standards.
- Ships with a [standalone compiler](#build-an-standalone) and a [performance analyser](#performance-analyser).
- Automatic Dependency Injection on commands and support of [Laravel 5](http://laravel.com) Service Providers.
- Supports [desktop notifications](https://github.com/nunomaduro/laravel-zero) on Linux, Windows or MacOS.

<p align="center">
    <img title="Terminal icon" src="https://raw.githubusercontent.com/nunomaduro/laravel-zero-docs/master/images/logo.png" />
</p>

Feel free to check out the [change log](CHANGELOG.md), [releases](nunomaduro/laravel-zero/releases), [license](LICENSE), and [contribution guidelines](CONTRIBUTING.md).

## Installation

[PHP](https://php.net) 7.1+

To get the latest version of Laravel Zero, simply create a new project using [Composer](https://getcomposer.org):

```bash
$ composer create-project --prefer-dist nunomaduro/laravel-zero <application-name>
```

<p align="center">
    <img title="Installation" src="https://raw.githubusercontent.com/nunomaduro/laravel-zero-docs/master/images/install.gif" />
</p>

<a name="usage"></a>
## Usage

Laravel Zero provides a main command. That is the default one of your application, placed in app/Console/Commands/Main.php.

You may review the documentation of the Artisan Console component [on Laravel Official Website](https://laravel.com/docs/5.4/artisan).

<p align="center">
    <img title="Installation" src="https://raw.githubusercontent.com/nunomaduro/laravel-zero-docs/master/images/commands.gif" />
</p>

<a name="build-an-standalone"></a>
## Build an standalone

Your Laravel Zero project, by default, allows you to build an standalone application.

```sh
$ php application build <name>
```

The build will provide you can a single executable, ready to use, of your application.

<a name="performance-analyser"></a>
## Performance Analyser

Laravel Zero ships with a **performance analyser**. Check easily of your application commands are taking too much memory or if they are spending too much time.

 <p align="center">
     <img title="Performance" src="https://raw.githubusercontent.com/nunomaduro/laravel-zero-docs/master/images/performance.png" />
 </p>

 ```sh
 $ php application <command> --performance
 ```

## Git branching model

The git branching model used for development is the one described and assisted by `twgit` tool: [https://github.com/Twenga/twgit](https://github.com/Twenga/twgit).

## Stay In Touch

For latest releases and announcements, follow on Twitter: [@enunomaduro](https://twitter.com/enunomaduro)

## Credits

This project uses code from several open source packages.

- [Laravel](https://laravel.com)
- [Symfony](http://symfony.com)
- [PHP performance tool](https://github.com/bvanhoekelen/performance)
- [JoliNotif - Send notifications to your desktop](https://github.com/jolicode/JoliNotif)

## License

The Zero is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

Copyright (c) 2017-2017 Nuno Maduro
