<?php

namespace App\Console\Commands;

use Illuminate\Support\Str;
use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Style\SymfonyStyle;

class Install extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'The install app command';

    /**
     * Holds an instance of SymfonyStyle.
     *
     * @var \Symfony\Component\Console\Style\SymfonyStyle;
     */
    protected $style;

    /**
     * Configure the command options.
     *
     * Ask for the name of the build.
     */
    protected function configure()
    {
        $this->addArgument('name', InputArgument::OPTIONAL);
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->style = new SymfonyStyle($this->input, $this->output);

        $this->displayWelcomeMessage()
            ->install();
    }

    /**
     * Asks for the application name.
     *
     * For the command came from a composer installer take the project folder name.
     * 
     * @return string
     */
    private function asksForApplicationName()
    {
        if (empty($name = $this->input->getArgument('name'))) {
            $name = $this->ask('What is your application name?');
        }

        if (empty($name)) {
            $name = trim(basename(dirname(BASE_PATH)));
        }

        return Str::lower($name);
    }

    /**
     * Display an welcome message.
     * 
     * @return $this
     */
    private function displayWelcomeMessage()
    {
        $this->style->title('Welcome to Laravel Zero installer.');

        return $this;
    }

    /**
     * Perform project modifications in order to apply the 
     * application name on the composer and on the binnary.
     * 
     * @return $this
     */
    private function install()
    {
        $name = $this->asksForApplicationName();

        $this->rename($name)
            ->updateComposer($name);
    }

    /**
     * Renames the application binnary.
     *
     * @param  string $name
     * 
     * @return $this
     */
    private function rename($name)
    {
        rename(BASE_PATH . '/application', BASE_PATH . '/' . $name);

        $this->output->writeln("Renaming application: <info>✔</info>");

        return $this;
    }

    /**
     * Update composer json with related information.
     *
     * @param  string $name
     * 
     * @return $this
     */
    private function updateComposer($name)
    {
        $composer = file_get_contents(BASE_PATH . '/composer.json');
        $composer = Str::replaceFirst('"application"', '"' . $name . '"', $composer);
        file_put_contents(BASE_PATH . '/composer.json', $composer);

        $this->output->writeln("Updating composer: <info>✔</info>");

        return $this;
    }
}
