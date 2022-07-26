<?php

namespace Jobilla\CloudNative\Monolog;

use Monolog\Handler\Handler;
use Monolog\Formatter\JsonFormatter;

class UseJsonFormatting
{
    public function __invoke($logger)
    {
        /** @var Handler $handler */
        foreach ($logger->getHandlers() as $handler) {
            $formatter = new JsonFormatter;
            $handler->setFormatter($formatter->includeStacktraces());
        }
    }
}
