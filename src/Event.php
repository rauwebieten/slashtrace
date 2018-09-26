<?php

namespace SlashTrace;

use SlashTrace\Context\EventContext;
use SlashTrace\Exception\ExceptionData;

class Event
{

    /** @var string */
    private $level;

    /** @var ExceptionData[] */
    private $exceptions = [];

    /** @var EventContext */
    private $context;

    /**
     * @return string
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param string $level
     */
    public function setLevel($level)
    {
        $this->level = $level;
    }

    public function addException(ExceptionData $exception)
    {
        $this->exceptions[] = $exception;
    }

    /**
     * @return ExceptionData[]
     */
    public function getExceptions()
    {
        return $this->exceptions;
    }

    /**
     * @return EventContext
     */
    public function getContext()
    {
        return $this->context;
    }

    public function setContext(EventContext $context)
    {
        $this->context = $context;
    }

}