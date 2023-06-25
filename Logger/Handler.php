<?php
namespace M2M\Logger\Logger;

use Monolog\Logger;

class Handler extends \Magento\Framework\Logger\Handler\Base
{
   /**
    * Logging level
    * @var int
    */
   protected $loggerType = Logger::INFO;

   /**
    * File name
    * @var string
    */
   protected $fileName = '/var/log/m2m_custom_log.log';
}