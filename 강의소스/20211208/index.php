<?php
include "../vendor/autoload.php";

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('general');
$log->pushHandler(new StreamHandler("log/".date("Ymd").".log", Logger::INFO)); // 

// add records to the log
$log->info("테스트 메세지 - info");
$log->warning("테스트 메세지 - warninig");
$log->error("테스트 메세지 - error");