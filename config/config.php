<?php

use NunoMaduro\ZeroFramework;

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
    ],
];
