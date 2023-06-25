<?php
namespace M2M\Logger\Logger;

class Logger extends \Monolog\Logger
{
    public function info($message, array $context = [], object $executedClass = null): void
    {
        // $this->addRecord(static::INFO, (string) $message, $context);
        if ($executedClass !== null){
            $message = $message . " PATH: " . get_class($executedClass);
        }

        $this->addRecord(static::INFO, (string) $message, $context);
    }
}