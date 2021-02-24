<?php

require_once __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$client = new MongoDB\Client(
    'mongodb+srv://'.$_ENV['MDB_USER'].':'.$_ENV['MDB_PASS'].'@tasktracker.zbcul.mongodb.net/sample_analytics?retryWrites=true&w=majority'
);

$customers = $client->sample_analytics->customers;
$document = $customers->findOne(['username' => 'wesley20']);

var_dump($document);
