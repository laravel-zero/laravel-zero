<p align="center">
  <a href="https://travis-ci.org/nunomaduro/laravel-zero"><img src="https://travis-ci.org/nunomaduro/laravel-zero.svg?branch=stable" alt="Build Status"></a>
  <a href="https://scrutinizer-ci.com/g/nunomaduro/laravel-zero/?branch=stable"><img src="https://scrutinizer-ci.com/g/nunomaduro/laravel-zero/badges/quality-score.png?b=stable" alt="Code Quality" />
  <a href="https://packagist.org/packages/nunomaduro/laravel-zero"><img src="https://poser.pugx.org/nunomaduro/laravel-zero/d/total.svg" alt="Total Downloads"></a>
  <a href="https://packagist.org/packages/nunomaduro/laravel-zero"><img src="https://poser.pugx.org/nunomaduro/laravel-zero/v/stable.svg" alt="Latest Stable Version"></a>
  <a href="https://packagist.org/packages/nunomaduro/laravel-zero"><img src="https://poser.pugx.org/nunomaduro/laravel-zero/license.svg" alt="License"></a>
  <a href='https://www.versioneye.com/user/projects/58d9809026a5bb0038e4206b'><img src='https://www.versioneye.com/user/projects/58d9809026a5bb0038e4206b/badge.svg?style=flat-square' alt="Dependency Status" /></a>
</p>

<p align="center">
    <img title="Terminal icon" src="https://raw.githubusercontent.com/nunomaduro/laravel-zero/stable/docs/logo.png" />
</p>

## Laravel Zero

- [Introduction](#introduction)
- [Server Requirements](#server-requirements)
- [Installation](#installation)
- [Build an standalone application](#build-an-standalone)
- [Documentation](#documentation)
- [Stay in touch](#stay-in-touch)
- [License](#license)

<a name="introduction"></a>
## Introduction

Laravel Zero provides an elegant starting point for your next Laravel Console Application.

A minimal console application with Illuminate components on top.

<p align="center">
    <img src="http://i.imgur.com/MSfhukT.png" alt="Laravel Zero" />
</p>

<a name="server-requirements"></a>
## Server Requirements

<div class="content-list" markdown="1">
- PHP >= 7.0
</div>

<a name="installation"></a>
## Installation

Laravel Zero utilizes [Composer](https://getcomposer.org) to manage its dependencies. So, before using Laravel Zero, make sure you have Composer installed on your machine.

Install Laravel Zero by issuing the Composer `create-project` command in your terminal:

```sh
$ composer create-project --prefer-dist nunomaduro/laravel-zero application
```

The create-project command will automatically run your application install command. We will take your application name to configure your application.

You can always modify your application name running:

```sh
$ php application install <name>
```

<a name="build-an-standalone"></a>
## Build an standalone

Your Laravel Zero project, by default, allows you to build an standalone application.

```sh
$ php application build <name>
```

The build will provide you can a single executable, ready to use, of your application.

<a name="documentation"></a>
## Documentation

Laravel Zero provides a main command. That is the default one of your application, placed in app/Console/Commands/Main.php. You should fill in the `signature` and `description` properties of the class, which will be used when displaying your command on the `list` screen. The `handle` method will be called when your command is executed. You may place your command logic in this method.

Let's take a look at an example command.

```php
<?php

namespace App\Console\Commands;

use App\DripEmailer;
use Illuminate\Console\Command;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:send {email}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send drip e-mails to a email';

    /**
     * The drip e-mail service.
     *
     * @var DripEmailer
     */
    protected $drip;

    /**
     * Create a new command instance.
     *
     * @param  DripEmailer|null  $drip
     * @return void
     */
    public function __construct(DripEmailer $drip = null)
    {
        parent::__construct();

        $this->drip = $drip ?: new DripEmailer;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->drip->send($this->argument('email'));
    }
}
```

You may review the documentation of the Artisan Console component [on Laravel Official Website](https://laravel.com/docs/5.4/artisan).

<a name="stay-in-touch"></a>
## Stay In Touch

- For latest releases and announcements, follow on Twitter: [@enunomaduro](https://twitter.com/enunomaduro)

<a name="license"></a>
## License

The Laravel Zero is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

Copyright (c) 2017-2017 Nuno Maduro
