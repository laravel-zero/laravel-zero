<?php

use NunoMaduro\ZeroFramework;

return [

    /*
     * Here goes your console application configuration. You
     * may define default commands or even Laravel Service
     * Providers configuration.
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
         * The application default command.
         *
         * You may want to remove this line in order to ask the user what command he
         * wants to execute.
         */
        'default-command' => App\DefaultCommand::class,

        /*
         * The application list of commands. Besides the default command the user can
         * also call any of the commands specified below.
         */
        'commands' => [
            ZeroFramework\Commands\Builder::class,
            ZeroFramework\Commands\Renamer::class,
        ],

        /*
         * Your application service providers. You may want work with an
         * external Laravel package.
         */
        'providers' => [
            \NunoMaduro\LaravelDesktopNotifier\LaravelDesktopNotifierServiceProvider::class,
        ],
    ],
];
