<?php

require_once __DIR__ . '/../vendor/autoload.php';

try {

    $redis = new Predis\Client([
        'scheme' => 'tcp',
        'host'   => '127.0.0.1',
        'port'   => 6379,
    ]);

} catch (Exception $e) {

    die("Redis Connection Failed: " . $e->getMessage());

}