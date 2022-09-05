<?php

require'../vendor/autoload.php';

use MonoLog\Logger;
use MonoLog\Handler\StreamHandler;

$logger = new Logger('nomedocanal');
$logger->pushHandler(new StreamHandler(__DIR__.'/App.log', Logger::DEBUG));

$logger->info('Este e uma string de info...');
$logger->warning('Isto e um warning...');
$logger->error('Esta e uma msg de erro');

$variable = array(1,17,"hello",null);
var_dump($variable);