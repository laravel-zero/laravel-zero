<?php

return [
    /*
     * Here goes your console application configuration. You should
     * define your application list of commands and your Laravel
     * Service Providers configuration.
     */
    'app' => [

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
        'default-command' => App\Commands\HelloCommand::class,

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
        ],
    ],

    /*
     * Here goes the illuminate/database component configuration.
     *
     * In order to install the database component type: php your-command-name component:install
     *
     * @see https://github.com/laravel/laravel/blob/master/config/database.php
     *      in order to understand how to configure other drivers.
     */
    'database' => [
        'connections' => [
            'default' => [
                'driver'   => 'sqlite',
                'database' => __DIR__.'/../database/database.sqlite',
            ],
        ],
    ],

    /*
     * Here goes the application cache configuration.
     *
     * @see https://github.com/laravel/laravel/blob/master/config/cache.php
     *      in order to understand how to configure other drivers.
     */
    'cache' => [
        'default' => 'array',
        'stores' => [
            'array' => [
                'driver' => 'array',
            ],
        ],
    ],
];
