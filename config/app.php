<?php

/*
 * Here goes the application configuration.
 */
return [
    /*
     * Here goes the application name.
     */
    'name' => 'Laravel Zero',

    /*
     * Here goes the application version.
     */
    'version' => '1.0.0',

    /*
     * Here goes the application default command. By default
     * the list of commands will appear. All commands
     * application commands will be auto-detected.
     *
     * 'default-command' => App\Commands\HelloCommand::class,
    */

    /*
     * If true, development commands won't be available as the app
     * will be in the production environment.
     */
    'production' => false,

    /*
     * If true, scheduler commands will be available.
     */
    'with-scheduler' => true,

    /*
     * Here goes the application list of Laravel Service Providers.
     * Enjoy all the power of Laravel on your console.
     */
    'providers' => [
        App\Providers\AppServiceProvider::class,
    ],
];
