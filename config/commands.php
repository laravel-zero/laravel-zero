<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Command
    |--------------------------------------------------------------------------
    |
    | Laravel Zero will always run the command specified below when no command name is
    | provided. Consider change the default command specifing another command class.
    | You cannot pass arguments to the default command because they are ignored.
    |
    */
    'default' => NunoMaduro\LaravelConsoleSummary\SummaryCommand::class,

    /*
    |--------------------------------------------------------------------------
    | Load Commands Paths.
    |--------------------------------------------------------------------------
    |
    | This value determines the "paths" that should be loaded by the console's
    | kernel. Foreach "path" present on the array provided below the kernel
    | will extract all "Illuminate\Console\Command" based class commands.
    |
    */
    'paths' => [app_path('Commands')],

    /*
    |--------------------------------------------------------------------------
    | Add Commands
    |--------------------------------------------------------------------------
    |
    | You may want to include a single command class without have to load an
    | intire folder. Here you may specify which commands classes you wish
    | to include. Of course the console's kernel will try to load them.
    |
    */
    'add' => [
        // ..
    ],

    /*
    |--------------------------------------------------------------------------
    | Hidden Commands
    |--------------------------------------------------------------------------
    |
    | Your application commands will always be visible on the application list
    | of commands. But you still may want make them hidden, so Laravel Zero
    | allows you to make it happen on the list of values provided bellow.
    |
    */
    'hidden' => [
        NunoMaduro\LaravelConsoleSummary\SummaryCommand::class,
        Symfony\Component\Console\Command\HelpCommand::class,
        Illuminate\Console\Scheduling\ScheduleRunCommand::class,
        Illuminate\Console\Scheduling\ScheduleFinishCommand::class,
        Illuminate\Foundation\Console\VendorPublishCommand::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Remove Commands
    |--------------------------------------------------------------------------
    |
    | Do you have a service provider that loads a list of commands that
    | you don't need? No problem. Laravel Zero allows you to specify
    | bellow a list of commands that you don't to see in your app.
    |
    */
    'remove' => [
        // ..
    ],

];
