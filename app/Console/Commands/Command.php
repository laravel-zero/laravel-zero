<?php

namespace App\Console\Commands;

use Performance\Performance;
use Illuminate\Console\Command as BaseCommand;
use NunoMaduro\LaravelDesktopNotifier\Notifications;
use NunoMaduro\LaravelDesktopNotifier\Contracts\Notifier;
use NunoMaduro\LaravelDesktopNotifier\Contracts\Notification;

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
     * @param string  $text
     * @param string  $body
     * @param string|null  $icon
     *
     * @return void
     */
    public function notify($text, $body, $icon = null): void
    {
        $notifier = $this->getContainer()->make(Notifier::class);

        $notification = $this->getContainer()->make(Notification::class)
            ->setTitle($text)
            ->setBody($body)
            ->setIcon($icon);

        $notifier->send($notification);
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
