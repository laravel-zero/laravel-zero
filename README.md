<p align="center">
    <img title="Laravel Zero" height="100" src="https://raw.githubusercontent.com/laravel-zero/docs/master/images/logo/laravel-zero-readme.png" />
</p>

<p align="center">
  <a href="https://styleci.io/repos/96572957"><img src="https://styleci.io/repos/96572957/shield" alt="StyleCI Status"></img></a>
  <a href="https://travis-ci.org/laravel-zero/framework"><img src="https://img.shields.io/travis/laravel-zero/framework/stable.svg?style=flat-square" alt="Build Status"></img></a>
  <a href="https://scrutinizer-ci.com/g/laravel-zero/framework"><img src="https://img.shields.io/scrutinizer/g/laravel-zero/framework.svg?style=flat-square" alt="Quality Score"></img></a>
  <a href="https://packagist.org/packages/laravel-zero/framework"><img src="https://poser.pugx.org/laravel-zero/framework/v/stable.svg" alt="Latest Stable Version"></a>
  <a href="LICENSE.md"><img src="https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square" alt="Software License"></img></a>
</p>

<h4> <center>This is a <bold>community project</bold> and not an official Laravel one </center></h4>

Laravel Zero was created and maintained by [Nuno Maduro](https://github.com/nunomaduro). Laravel Zero is a micro-framework that provides an elegant starting point for your console application. **Unofficial** and customized version of Laravel optimized for building command-line applications.

- Build on top of the [Laravel](https://laravel.com) components.
- Optional the installation of [Eloquent](#database).
- Auto detects commands and supports [desktop notifications](#desktop-notifications) on Linux, Windows & MacOS.
- Ships with a [Scheduler](#scheduler) and an [Standalone Compiler](#build-a-standalone-application).
- Integration with [Collision](https://github.com/nunomaduro/collision) - A Detailed & intuitive error handler

## Requirements & Installation

> **Requires [PHP 7.1+](https://php.net/releases/)**

Via Laravel Zero Installer

```bash
composer global require laravel-zero/installer
```

```bash
laravel-zero new your-app-name
```

Or simply create a new Laravel Zero project using [Composer](https://getcomposer.org):

```bash
composer create-project --prefer-dist laravel-zero/laravel-zero your-app-name
```

To run your application just type in your application root folder:

```bash
php your-app-name
```

You can rename your application anytime by running the following command in your app directory:

```sh
php your-app-name app:rename new-name
```

## Usage

### App\Commands

Laravel Zero provides you an `app\Commands\HelloCommand.php` as example. Create a new command using:

```sh
php your-app-name make:command NewCommand
```

Concerning the Command file content, you may want to review the documentation of the Artisan Console component:

- The [Defining Input Expectations](https://laravel.com/docs/5.5/artisan#defining-input-expectations) section allows you to understand
 how to gather input from the user through arguments or options. As example:

```php
 protected $signature = 'user:create
                        {name : The name of the user} // required
                        {--age= : The age of the user}'; // optional.
```

<a href="desktop-notifications"></a>
- The [Command I/O](https://laravel.com/docs/5.5/artisan#command-io) allows you to understand how to capture those input expectations and
interact the with using commands like `line`, `info`, `comment`, `question` and `error` methods.

Laravel Zero adds an extra option allowing desktop notifications:
```php
  $this->notify("Title", "Body", "icon.png");
```

The default command of your aplication is the symfony *ListCommand*, that provides a list of commands.
You may change this behavior modifying the `config/app.php`:

```php
    'default-command' => App\Commands\DefaultCommand::class,
```

All *commands* should exists within *app/Commands* directory in order to be automatic registered by the application.
You may want to load other commands or other commands namespaces modifying `config/app.php`:

```php
    'commands' => [
      App\Prod\CleanCache::class,
    ],

    'commands-namespaces' => [
      "App\Local\Commands",
      "App\Deploy\Commands"
    ],
```

You may want to hide *development* commands moving the application to production modifying the `config/app.php`:

```php
    'production' => true,
```

### App\ServiceProviders

Laravel Zero recommends the usage of [Laravel Service Providers](https://laravel.com/docs/5.5/providers) for defining concrete
implementations. Define them in `app\Providers\AppServiceProvider.php` or create new service providers.
The `config/app.php` *providers* array contain the registered service providers.
Below there is an example of a concrete implementation bound to a contract/interface.

```php
    public function register()
    {
        $this->app->singleton(Contract::class, function ($app) {
            return new Concrete(config('database'));
        });
    }

    app(Contract::class) // Returns a Concrete implementation.
```

### Config

The `config\app.php` file contains your application configuration, there you can create a new configuration `foo => true` and access to the
that same configuration using `config('app.foo')`.

All files within `config` folder are automatic registered as configuration files.
You can also create specific configuration files, E.g: `app\bar.php` and access it by `config('bar')`.

### Tests

The `tests` folder contains your `phpunit` tests. By default, the Laravel Zero ships with an *Integration* suite that can be used like
the example below:

```php
class CommandTest extends TestCase
{
    /** @test */
    public function it_checks_the_command_output(): void
    {
        $this->app->call('command-name');

        $this->assertTrue($this->app->output() === 'Love beautiful code? We do too.');
    }
}
```

Running your application *tests*:

```sh
./vendor/bin/phpunit
```

<a href="database"></a>
## Database

Laravel Zero allows you to install a **Database** component out of the box to push your console app to the next level.
As you might have already guessed it is Laravel's [Eloquent](https://laravel.com/docs/5.5/eloquent) component that works with the same breeze in Laravel Zero environment too.

```sh
php your-app-name database:install
```

Usage:

```php
use Illuminate\Support\Facades\DB;

DB::table('users')->insert(
    ['email' => 'enunomaduro@gmail.com']
);

$users = DB::table('users')->get();
```

Laravel [Database Migrations](https://laravel.com/docs/5.5/migrations) feature is also included.

## Filesystem

If you want to move files in your system, or to multiple providers like AwsS3 and Dropbox, Laravel Zero ships with [Filesystem](https://laravel.com/docs/5.5/filesystem) component by default.

Note: The root directory is `your-app-name/storage/local`.

```php
use Illuminate\Support\Facades\Storage;

Storage::put("reminders.txt", "Task 1");

```

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

You may want to remove this feature, modifying `config/app.php`:

```php
    'with-scheduler' => false,
```

<a href="build-a-standalone-application"></a>
## Building a standalone application

Your Laravel Zero project, by default, allows you to build a standalone PHAR archive to ease the deployment or the distribution of your project.

```sh
php your-app-name app:build <your-build-name>
```

The build will provide a single phar archive, ready to use, containing all the code of your project and its dependencies. You will then be able to execute it directly:

```sh
./builds/<your-build-name>
```

or on Windows:

```sh
C:\application\path> php builds\<your-build-name>
```

## Collision - Detailed & intuitive interface for errors

Love [Whoops](http://filp.github.io/whoops/) on Laravel? Get ready for a similar error handler! Laravel Zero
ships with [Collision](https://github.com/nunomaduro/collision) giving you a detailed & intuitive interface for errors and exceptions on your console application.

Get more details: [https://github.com/nunomaduro/collision](https://github.com/nunomaduro/collision).

## Support & Community

Thank you for considering to contribute to Laravel Zero. All the contribution guidelines are mentioned [here](https://github.com/laravel-zero/laravel-zero/blob/stable/CONTRIBUTING.md).

You can have a look at the [CHANGELOG](https://github.com/laravel-zero/laravel-zero/blob/stable/CHANGELOG.md) for constant updates & detailed information about the changes. You can also follow the twitter account for latest announcements : [@enunomaduro](https://twitter.com/laravelzero)

## License

Laravel Zero is an open-sourced software licensed under the [MIT license](https://github.com/laravel-zero/laravel-zero/blob/stable/LICENSE.md).
