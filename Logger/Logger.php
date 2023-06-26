<?php
namespace M2M\Logger\Logger;

class Logger extends \Monolog\Logger
{
    public function info($message, array $context = [], object $executedClass = null): void
    {
        // Checks if the third argument is given
        // Custom message is extended by path to the file
        if ($executedClass !== null){
            $message = $message . " PATH: " . get_class($executedClass);
        }

        // Adds message to the log file
        $this->addRecord(static::INFO, (string) $message, $context);
    }
}