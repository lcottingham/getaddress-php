<?php
require __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::create(__DIR__ . '/../');
$dotenv->load();

$client = new \Philcross\GetAddress\Client(
    getenv('GET_ADDRESS_IO_API_KEY'),
    getenv('ET_ADDRESS_IO_ADMINISTRATION_KEY=')
);

$response = $client->findExpanded('TR19 7AA');

var_dump($response);