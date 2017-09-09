<p align="center">
    <img title="Laravel Zero" height="100" src="https://raw.githubusercontent.com/laravel-zero/docs/master/images/logo/laravel-zero-readme.svg" />
</p>
<p align="center">
  <a href="https://styleci.io/repos/96572957"><img src="https://styleci.io/repos/96572957/shield" alt="StyleCI Status"></img></a>
  <a href="https://travis-ci.org/laravel-zero/framework"><img src="https://img.shields.io/travis/laravel-zero/framework/stable.svg?style=flat-square" alt="Build Status"></img></a>
  <a href="https://scrutinizer-ci.com/g/laravel-zero/framework"><img src="https://img.shields.io/scrutinizer/g/laravel-zero/framework.svg?style=flat-square" alt="Quality Score"></img></a>
  <a href="https://packagist.org/packages/laravel-zero/framework"><img src="https://poser.pugx.org/laravel-zero/framework/v/stable.svg" alt="Latest Stable Version"></a>
  <a href="LICENSE"><img src="https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square" alt="Software License"></img></a>
</p>

About Laravel Zero
================

Laravel Zero was created by [Nuno Maduro](https://github.com/nunomaduro) and it is maintained by [Nuno Maduro](https://github.com/nunomaduro) & [Harish Toshniwal](https://github.com/introwit). Laravel Zero is a micro-framework that provides an elegant starting point for your next console application.
**Unofficial** and customized version of Laravel optimized for building console/shell/command-line applications.

- Build on top of the [Laravel 5](https://laravel.com) components.
- Includes the [Database Component.](#components)
- Built with [PHP 7](https://php.net) using modern coding standards.
- Ships with a [standalone compiler](#build-a-standalone-application).
- Automatic Dependency Injection on commands and support of [Laravel 5](https://laravel.com) Service Providers.
- Supports [desktop notifications](https://github.com/laravel-zero/laravel-zero) on Linux, Windows & MacOS.

<p align="center">
    <img title="Terminal icon" src="https://raw.githubusercontent.com/laravel-zero/docs/master/images/logo.png" />
</p>

## Installation & Usage

> **Requires [PHP 7.1+](https://php.net/releases/)**

Simply create a new Laravel Zero project using [Composer](https://getcomposer.org):

```bash
composer create-project --prefer-dist laravel-zero/laravel-zero your-app-name
```

Your Laravel Zero project will be then created in the `your-app-name` folder. Laravel Zero provides a default command placed in the `app/DefaultCommand.php` file which will be executed by default. To execute it, run the following command in your app's directory:

```bash
php your-app-name
```

You can rename your app anytime by running the following command in your app directory:

```sh
php your-app-name app:rename newName
```

You may review the documentation of the Artisan Console component [on Laravel's Official Website](https://laravel.com/docs/5.4/artisan).

<a href="components"></a>

## Components

Laravel Zero ships with a Database component out of the box to push your console app to the next level. As you might have already guessed it is Laravel's [Illuminate Database](https://github.com/illuminate/database) component that works with the same breeze in Laravel Zero environment too.

To install the components run the following command in your Laravel Zero app directory:

```sh
php your-app-name component:install
```

This will allow you to select the component to install from the list of available components. Right now, only the Database component is available but many more are in the pipeline.

<a name="configuration"></a>

## Configuration

The configuration of your console application goes in `config\config.php`. In this file, you should
define your application's list of commands and your Laravel Service Providers in this file.

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
            // App\Commands\YourNewCommand::class,
        ],

        /*
         * Here goes the application list of Laravel Service Providers.
         * Enjoy all the power of Laravel on your console.
         */
        'providers' => [
            App\Providers\AppServiceProvider::class,
            \NunoMaduro\LaravelDesktopNotifier\LaravelDesktopNotifierServiceProvider::class,
        ],
```

<a name="build-a-standalone-application"></a>
## Building a standalone application

Your Laravel Zero project, by default, allows you to build a standalone PHAR archive to ease the deployment or the distribution of your project.

```sh
php your-app-name app:build <your-build-name>
```

The build will provide a single phar archive, ready to use, containing all the code of your project and its dependencies.

Note that the generated file will still need a PHP installation respecting your project's requirements (PHP version, extensions, etc.) on the users' computers to be used. You will then be able to execute it directly:

```sh
./builds/<your-build-name>
```

or on Windows:

```sh
C:\application\path> php builds\<your-build-name>
```

## Contributing

- Thank you for considering to contribute to Laravel Zero. All the contribution guidelines are mentioned [here](CONTRIBUTING.md).

## Stay In Touch

You can have a look at the [CHANGELOG](CHANGELOG.md) & [Releases](https://github.com/laravel-zero/laravel-zero/releases) for constant updates & detailed information about the changes. You can also follow the twitter account for latest announcements or just come say hi!: [@laravelzero](https://twitter.com/laravelzero)

## Credits

- [Laravel](https://laravel.com)
- [Symfony](https://symfony.com)
- [JoliNotif - Send notifications to your desktop](https://github.com/jolicode/JoliNotif)
- [Caneco - Wallpapers and logo](https://github.com/caneco)

## License

Laravel Zero is an open-sourced software licensed under the [MIT license](LICENSE.md).
