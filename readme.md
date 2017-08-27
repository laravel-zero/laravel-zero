<p align="center">
    <img title="Laravel Zero" height="100" src="https://raw.githubusercontent.com/nunomaduro/laravel-zero-docs/master/images/logo/1024x1024/Round/2.png" />
</p>
<p align="center">
  <a href="https://styleci.io/repos/96572957"><img src="https://styleci.io/repos/96572957/shield" alt="StyleCI Status"></img></a>
  <a href="https://travis-ci.org/nunomaduro/zero-framework"><img src="https://img.shields.io/travis/nunomaduro/zero-framework/stable.svg?style=flat-square" alt="Build Status"></img></a>
  <a href="https://scrutinizer-ci.com/g/nunomaduro/zero-framework"><img src="https://img.shields.io/scrutinizer/g/nunomaduro/zero-framework.svg?style=flat-square" alt="Quality Score"></img></a>
  <a href="https://packagist.org/packages/nunomaduro/zero-framework"><img src="https://poser.pugx.org/nunomaduro/zero-framework/v/stable.svg" alt="Latest Stable Version"></a>
  <a href="LICENSE"><img src="https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square" alt="Software License"></img></a>
</p>

About Laravel Zero
================

Laravel Zero was created by, and is maintained by [Nuno Maduro](https://github.com/nunomaduro), and is a micro-framework that provides an elegant starting point for your next console application.
**Unofficial** and customized version of Laravel optimized for building console/shell/command-line applications.

- Build on top of the [Laravel 5](https://laravel.com) components.
- Includes the [Database Component.](#components)
- Built with [PHP 7](https://php.net) using modern coding standards.
- Ships with a [standalone compiler](#build-a-standalone-application).
- Automatic Dependency Injection on commands and support of [Laravel 5](https://laravel.com) Service Providers.
- Supports [desktop notifications](https://github.com/nunomaduro/laravel-zero) on Linux, Windows & MacOS.

<p align="center">
    <img title="Terminal icon" src="https://raw.githubusercontent.com/nunomaduro/laravel-zero-docs/master/images/logo.png" />
</p>

Feel free to check out the [change log](CHANGELOG.md), [releases](https://github.com/nunomaduro/laravel-zero/releases), [license](LICENSE.md), and [contribution guidelines](CONTRIBUTING.md).

## Installation & Usage

> **Requires [PHP 7.1+](http://php.net/releases/)**

Simply create a new project using [Composer](https://getcomposer.org):

```bash
composer create-project --prefer-dist nunomaduro/laravel-zero your-app-name
```

Your Laravel Zero project will be then created in the `your-app-name` folder. `CD` into that directory and execute your app:

```bash
php your-app-name
```

You can rename your app anytime by running the following command in your app directory:

```sh
php your-app-name app:rename newName
```

Laravel Zero provides a default command placed in the `app/DefaultCommand.php` file.

You may review the documentation of the Artisan Console component [on Laravel's Official Website](https://laravel.com/docs/5.4/artisan).

<a href="components"></a>

## Components

Laravel Zero ships with a Database component out of the box to push your console app to the next level. As you might have already guessed it is Laravel's [Illuminate Database](https://github.com/illuminate/database) component that works with the same breeze in Laravel Zero environment too.

To install the components run the following command in your Laravel Zero app directory:

```sh
php application component:install
```

This will allow you to select the component to install from the list of available components. Right now, only the Database component is available but many more are in the pipeline.

<a name="configuration"></a>

## Configuration

The configuration of your console application goes in `config\config.php`. In this file, you should
define your application's list of commands and your Laravel Service Providers.

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
         * If true, development commands won't be available as the app
         * will be in the production environment.
         */
        'production' => false,

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
         * Here goes the list of Laravel Service Providers
         * Enjoy all the power of Laravel on your console.
         */
        'providers' => [
            \NunoMaduro\LaravelDesktopNotifier\LaravelDesktopNotifierServiceProvider::class,
        ],
```

<a name="build-a-standalone-application"></a>
## Building a standalone application

Your Laravel Zero project, by default, allows you to build a standalone PHAR archive to ease the deployment or the distribution of your project.

```sh
php your-app-name build <name>
```

The build will provide a single phar archive, ready to use, containing all the code of your project and its dependencies.

Note that the generated file will still need a PHP installation respecting your project's requirements (PHP version, extensions, etc.) on the users' computers to be used. You will then be able to execute it directly:

```sh
./builds/<name>
```

or on Windows:

```sh
C:\application\path> php builds\<name>
```

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

Copyright (c) 2017 Nuno Maduro
