<p align="center">
    <img title="Laravel Zero" height="100" src="https://raw.githubusercontent.com/laravel-zero/docs/master/images/logo/laravel-zero-readme.png" />
</p>
<p align="center">
  <a href="https://styleci.io/repos/96572957"><img src="https://styleci.io/repos/96572957/shield" alt="StyleCI Status"></img></a>
  <a href="https://travis-ci.org/laravel-zero/framework"><img src="https://img.shields.io/travis/laravel-zero/framework/stable.svg?style=flat-square" alt="Build Status"></img></a>
  <a href="https://scrutinizer-ci.com/g/laravel-zero/framework"><img src="https://img.shields.io/scrutinizer/g/laravel-zero/framework.svg?style=flat-square" alt="Quality Score"></img></a>
  <a href="https://packagist.org/packages/laravel-zero/framework"><img src="https://poser.pugx.org/laravel-zero/framework/v/stable.svg" alt="Latest Stable Version"></a>
  <a href="LICENSE"><img src="https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square" alt="Software License"></img></a>
</p>

## This is a community project and not an "official" Laravel one

Laravel Zero was created and maintained by [Nuno Maduro](https://github.com/nunomaduro). Laravel Zero is a micro-framework that provides an elegant starting point for your next console application. **Unofficial** and customized version of Laravel optimized for building console/shell/command-line applications.

- Build on top of the [Laravel](https://laravel.com) components.
- Allows the installation of the [Database/Filesystem Components](#components).
- Built with [PHP 7](https://php.net) using modern coding standards.
- Ships with a [standalone compiler](#build-a-standalone-application) and a [Scheduler](#scheduler) component.
- Automatic dependency injection on commands and support of [Laravel](https://laravel.com) Service Providers.
- Supports [desktop notifications](https://github.com/laravel-zero/laravel-zero) on Linux, Windows & MacOS.

## Installation & Usage

> **Requires [PHP 7.1+](https://php.net/releases/)**

Via Laravel Zero Installer

```bash
composer global require laravel-zero/installer
```

```bash
laravel-zero new your-app-name
```

Or Simply create a new Laravel Zero project using [Composer](https://getcomposer.org):

```bash
composer create-project --prefer-dist laravel-zero/laravel-zero your-app-name
```

Your Laravel Zero project will be then created in the `your-app-name` folder. Laravel Zero provides a default command placed in the `app/HelloCommand.php` file which will be executed by default. To execute it, run the following command in your app's directory:

```bash
php your-app-name
```

You can rename your app anytime by running the following command in your app directory:

```sh
php your-app-name app:rename new-name
```

You may review the documentation of the Artisan Console component [on Laravel's Official Website](https://laravel.com/docs/5.5/artisan).

<a href="scheduler"></a>

## Scheduler

Laravel Zero ships with the [Task Scheduling](https://laravel.com/docs/5.5/scheduling) of Laravel, to use it you may need to add the following Cron entry to your server:

```
* * * * * php /path-to-your-project/your-app-name schedule:run >> /dev/null 2>&1
```

You may define all of your scheduled tasks in the `schedule` method of the command:
```php
    public function schedule(Schedule $schedule): void
    {
        $schedule->command(static::class)->everyMinute();
    }
```

<a href="components"></a>

## Components

Laravel Zero allows you to install a Database component out of the box to push your console app to the next level. As you might have already guessed it is Laravel's [Eloquent](https://laravel.com/docs/5.5/eloquent) component that works with the same breeze in Laravel Zero environment too.

If you want to move files to multiple providers like AwsS3 and Dropbox, you may consider the [Filesystem](https://laravel.com/docs/5.5/filesystem) component.

To install the components run the following command in your Laravel Zero app directory:

```sh
php your-app-name component:install
```

This will allow you to select the component to install from the list of available components.

<a name="configuration"></a>

## Configuration

The configuration of your console application goes in `config\config.php`. In this file, you should define your application's list of commands and your Laravel Service Providers in this file.

```php

        'default-command' => App\Commands\HelloCommand::class,

        'commands' => [
            App\Commands\AddUserCommand::class,
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

Thank you for considering to contribute to Laravel Zero. All the contribution guidelines are mentioned [here](CONTRIBUTING.md).

## Stay In Touch

You can have a look at the [CHANGELOG](CHANGELOG.md) & [Releases](https://github.com/laravel-zero/laravel-zero/releases) for constant updates & detailed information about the changes. You can also follow the twitter account for latest announcements or just come say hi!: [@laravelzero](https://twitter.com/laravelzero)

## License

Laravel Zero is an open-sourced software licensed under the [MIT license](LICENSE.md).
