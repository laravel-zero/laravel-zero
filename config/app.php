<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application. This value is used when the
    | framework needs to place the application's name in a notification or
    | any other location as required by the application or its packages.
    |
    */
    'name' => 'Laravel Zero',

    /*
    |--------------------------------------------------------------------------
    | Application Version
    |--------------------------------------------------------------------------
    |
    | This value determines the "version" your application is currently running
    | in. You may want to follow the "Semantic Versioning" - Given a version
    | number MAJOR.MINOR.PATCH when an update happens: https://semver.org.
    |
    */
    'version' => '1.0.0',

    /*
    |--------------------------------------------------------------------------
    | Application Default Command
    |--------------------------------------------------------------------------
    |
    | Laravel Zero will always run the command specified below when no command name is
    | provided. Consider change the default command specifing another command class.
    | You cannot pass arguments to the default command because they are ignored.
    |
    */
    'default-command' => Symfony\Component\Console\Command\ListCommand::class,

    /*
    |--------------------------------------------------------------------------
    | Application Environment
    |--------------------------------------------------------------------------
    |
    | This value determines the "environment" your application is currently
    | running in. This may determine how you prefer to configure various
    | services your application utilizes. Should be true in production.
    |
    */
    'production' => false,

    /*
    |--------------------------------------------------------------------------
    | Scheduler
    |--------------------------------------------------------------------------
    |
    | Laravel Zero's command scheduler allows you to fluently and expressively define
    | your command schedule. When using the scheduler, only a single Cron entry is
    | needed on your server. Your task schedule is defined on each command class.
    |
    */
    'with-scheduler' => true,

    /*
    |--------------------------------------------------------------------------
    | Autoloaded Service Providers
    |--------------------------------------------------------------------------
    |
    | The service providers listed here will be automatically loaded on the
    | request to your application. Feel free to add your own services to
    | this array to grant expanded functionality to your applications.
    |
    */
    'providers' => [
        App\Providers\AppServiceProvider::class,
    ],

];
