<?php

namespace App\Console\Commands;

use Performance\Performance;
use Illuminate\Console\Command as BaseCommand;
use Illuminate\Contracts\Container\Container;
use NunoMaduro\LaravelDesktopNotifier\Contracts\Notification;
use NunoMaduro\LaravelDesktopNotifier\Contracts\Notifier;

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
     *
     * Takes in consideration if the performance argument.
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
     * Returns the application container.
     *
     * @return \Illuminate\Contracts\Container\Container
     */
    public function getContainer(): Container
    {
        return $this->getLaravel();
    }

    /**
     * @param string $text
     * @param string $body
     * @param string|null $icon
     *
     * @return void
     */
    public function notify(string $text, string $body, $icon = null): void
    {
        $notifier = $this->getContainer()->make(Notifier::class);

        $notification = $this->getContainer()
            ->make(Notification::class)
            ->setTitle($text)
            ->setBody($body)
            ->setIcon($icon);

        $notifier->send($notification);
    }

    /**
     * Execute the console command.
     */
    public function fire(): void
    {
    }

    /**
     * Checks if the performance feature is available.
     *
     * @return bool
     */
    private function isProfilingAvailable(): bool
    {
        return class_exists('Performance\Performance');
    }
}
