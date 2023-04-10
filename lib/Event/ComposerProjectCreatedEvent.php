<?php

namespace Harryn\Jacobn\PackageManager\Event;

use Composer\Script\Event as ComposerEvent;
use Symfony\Contracts\EventDispatcher\Event;

class ComposerProjectCreatedEvent extends Event
{
    public const NAME = 'jacobn.composer.project.created';

    protected $event;

    public function __construct(ComposerEvent $event)
    {
        $this->event = $event;
    }

    public function getComposerEvent(): ComposerEvent
    {
        return $this->event;
    }
}
