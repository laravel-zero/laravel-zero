<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Package Name
    |--------------------------------------------------------------------------
    |
    | This option defines the Package name which used by Packagist.
    |
    */

    'packageName' => null,

    /*
    |--------------------------------------------------------------------------
    | Phar File Name
    |--------------------------------------------------------------------------
    |
    | This option defines the phar file name. By, default it will be the name
    | of the application.
    |
    */

    'pharFileName' => null,

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

    'version' => app('git.version'),

    /*
    |--------------------------------------------------------------------------
    | Strategy Method
    |--------------------------------------------------------------------------
    |
    | It should be either: Github (https://github.com/humbug/phar-updater#github-release-strategy)
    | or Basic strategy which assume that the phar file has been signed with a private
    | key (using OpenSSL).
    |
    | Possible values: "github", "basic".
    | Default value: "github"
    |
    */

    'strategy' => 'github',
];
