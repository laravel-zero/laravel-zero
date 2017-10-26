<?php

return [
    /*
     * Here goes the application configuration.
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
         * Here goes the application default command. If you remove this
         * line, the list of commands will appear. The rest of the
         * application commands will be auto-detected.
         */
        'default-command' => App\Commands\HelloCommand::class,

        /*
         * Here goes the application list of Laravel Service Providers.
         * Enjoy all the power of Laravel on your console.
         */
        'providers' => [
            App\Providers\AppServiceProvider::class,
        ],
    ],

    /*
     * Here goes the illuminate/database component configuration. Once
     * installed, the configuration below is used to configure your
     * database component.
     */
    'database' => [
        /*
         * If true, migrations commands will be available.
         */
        'with-migrations' => true,

        /*
         * Here goes the application database connection configuration. By
         * default, we use `sqlite` as a driver. Feel free to use another
         * driver, be sure to check the database component documentation.
         */
        'connections' => [
            'default' => [
                'driver' => 'sqlite',
                'database' => __DIR__.'/../database/database.sqlite',
            ],
        ],
    ],
];
