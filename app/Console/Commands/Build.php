<?php

namespace App\Console\Commands;

use FilesystemIterator;
use Phar;
use Symfony\Component\Console\Input\InputArgument;
use UnexpectedValueException;

class Build extends Command
{
    /**
     * The directory that contains your application builds.
     */
    const BUILD_PATH = BASE_PATH.'/builds';

    /**
     * The default build name.
     */
    const BUILD_NAME = 'application';

    /**
     * Contains the application structure
     * needed for the build.
     *
     * @var array
     */
    protected $structure = [
        'app/',
        'vendor/',
        'bootstrap/',
        'config/',
    ];

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'build';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'The build app command';

    /**
     * Execute the console command.
     */
    public function fire(): void
    {
        if (Phar::canWrite()) {
            $this->build($this->input->getArgument('name') ?: self::BUILD_NAME);
        } else {
            $this->error('Unable to compile a phar because of php\'s security settings. '
                .'phar.readonly must be disabled in php.ini. '.PHP_EOL.PHP_EOL
                .'You will need to edit '.php_ini_loaded_file().' and add or set'
                .PHP_EOL.PHP_EOL.'    phar.readonly = Off'.PHP_EOL.PHP_EOL
                .'to continue. Details here: http://php.net/manual/en/phar.configuration.php'
            );
        }
    }

    /**
     * Configure the command options.
     *
     * Ask for the name of the build.
     */
    protected function configure(): void
    {
        $this->addArgument('name', InputArgument::OPTIONAL);
    }

    /**
     * Builds the application.
     *
     * @param string $name
     *
     * @return $this
     */
    protected function build(string $name): Build
    {
        $this->comment("Building: $name");
        $this->compile($name)
            ->cleanUp($name);

        $this->info("Standalone application compiled into: builds/$name");

        return $this;
    }

    /**
     * Compiles the standalone application.
     *
     * @param string $name
     *
     * @return $this
     */
    protected function compile(string $name): Build
    {
        $compiler = $this->makeFolder()
            ->getCompiler($name);

        $compiler->buildFromDirectory(BASE_PATH, '#'.implode('|', $this->structure).'#');
        $compiler->setStub($compiler->createDefaultStub('bootstrap/init.php'));

        return $this;
    }

    /**
     * Gets a new instance of the compiler.
     *
     * @param string $name
     *
     * @return \Phar
     */
    protected function getCompiler(string $name): \Phar
    {
        try {
            return new Phar(
                self::BUILD_PATH.'/'.$name.'.phar',
                FilesystemIterator::CURRENT_AS_FILEINFO | FilesystemIterator::KEY_AS_FILENAME,
                $name
            );
        } catch (UnexpectedValueException $e) {
            $this->error("You can't perform a build.");
            exit(0);
        }
    }

    /**
     * Creates the folder for the builds.
     *
     * @return $this
     */
    protected function makeFolder(): Build
    {
        if (!file_exists(self::BUILD_PATH)) {
            mkdir(self::BUILD_PATH);
        }

        return $this;
    }

    /**
     * Moves the compiled files to the builds folder.
     *
     * @param string $name
     *
     * @return $this
     */
    protected function cleanUp(string $name): Build
    {
        $file = self::BUILD_PATH."/$name";
        rename("$file.phar", $file);

        return $this;
    }
}
