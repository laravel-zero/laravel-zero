<?php

namespace App\Console\Commands;

use Illuminate\Console\Command as BaseCommand;
use Performance\Performance;

abstract class Command extends BaseCommand
{
    /**
     * Create a new console command instance.
     */
    public function __construct()
    {
        parent::__construct();

        if ($this->isProfilingAvailable()) {
            $this->addOption('performance');
        }
    }

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        if ($this->isProfilingAvailable() && $this->input->getOption('performance')) {
            Performance::point('The command `'.$this->getName().'`');
        }

        $this->fire();

        if ($this->isProfilingAvailable() && $this->input->getOption('performance')) {
            Performance::results();
        }
    }

    /**
     * Returns the container.
     *
     * @return \Illuminate\Contracts\Foundation\Application
     */
    public function getContainer()
    {
        return $this->getLaravel();
    }

    /**
     * Checks if the performance feature is available.
     *
     * @return bool
     */
    private function isProfilingAvailable()
    {
        return class_exists('Performance\Performance');
    }
}
