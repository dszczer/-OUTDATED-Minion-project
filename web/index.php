<?php

require_once __DIR__ . '/../vendor/autoload.php';

$app = new \Minion\Application('App', ['debug' => true, 'environment' => 'prod']);
$app->run();