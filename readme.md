<p align="center">
    <img title="Terminal icon" src="https://raw.githubusercontent.com/nunomaduro/laravel-zero/26df832a0e72f1002d3a94455475ccd5534e9f40/docs/logo.png" />
</p>

Laravel Zero
================

Laravel Zero was created by, and is maintained by [Nuno Maduro](https://github.com/nunomaduro), and is a micro-framework that provides an elegant starting point for your next console application.

- Build on top of the [Laravel 5](http://laravel.com) components.
- Built on [PHP](http://php.net) 7 with modern coding standards.
- Ships with a [standalone compiler](#build-an-standalone) and a [performance analyser](#performance-analyser).
- Automatic Dependency Injection on commands and support of [Laravel 5](http://laravel.com) Service Providers.
- Supports [desktop notifications](https://github.com/nunomaduro/laravel-desktop-notifier) on Linux, Windows or MacOS.

Feel free to check out the [change log](CHANGELOG.md), [releases](nunomaduro/laravel-zero/releases), [license](LICENSE), and [contribution guidelines](CONTRIBUTING.md).

## Installation

[PHP](https://php.net) 7.1+

To get the latest version of Laravel Zero, simply create a new project using [Composer](https://getcomposer.org):

```bash
$ composer create-project --prefer-dist nunomaduro/laravel-zero <application-name>
```

<p align="center">
    <img title="Installation" src="https://raw.githubusercontent.com/nunomaduro/laravel-zero/stable/docs/install.gif" />
</p>

<a name="usage"></a>
## Usage

Laravel Zero provides a main command. That is the default one of your application, placed in app/Console/Commands/Main.php.

You may review the documentation of the Artisan Console component [on Laravel Official Website](https://laravel.com/docs/5.4/artisan).

<p align="center">
    <img title="Installation" src="https://raw.githubusercontent.com/nunomaduro/laravel-zero/stable/docs/commands.gif" />
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
     <img title="Performance" src="https://raw.githubusercontent.com/nunomaduro/laravel-zero/stable/docs/performance.png" />
 </p>

 ```sh
 $ php application <command> --performance
 ```

## Git branching model

The git branching model used for development is the one described and assisted by `twgit` tool: [https://github.com/Twenga/twgit](https://github.com/Twenga/twgit).

## Stay In Touch

For latest releases and announcements, follow on Twitter: [@enunomaduro](https://twitter.com/enunomaduro)

## License

The Zero is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

Copyright (c) 2017-2017 Nuno Maduro
