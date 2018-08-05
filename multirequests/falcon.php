<?php

// Clases Necesarias de ReactPHP.
use React\EventLoop\Factory;
use React\HttpClient\Response;
use React\HttpClient\Client;

// Muy importante incluir el autoload que se encargará de importarnos todas las dependencias.
require 'vendor/autoload.php';

$tstart = microtime(true);

$loop = React\EventLoop\Factory::create();
$client = new React\HttpClient\Client($loop);

$datosagrupados = [];

// HTTP Request Nº 1.
$request = $client->request('GET', 'http://icanhazip.com/');
$request->on('response', function (\React\HttpClient\Response $response) use (&$datosagrupados) {
    $response->on('data', function ($chunk) use (&$datosagrupados) {
        $datosagrupados[] = ['Request Nº 1' => $chunk];
    });
});

// HTTP Request Nº 2.
$request2 = $client->request('GET', 'https://ipinfo.io/json/38.104.128.99');
$request2->on('response', function (\React\HttpClient\Response $response) use (&$datosagrupados) {
    $response->on('data', function ($chunk) use (&$datosagrupados) {
        $datosagrupados[] = ['Request Nº 2' => $chunk];
    });
});

// HTTP Request Nº 3.
$request3 = $client->request('GET', 'https://ipinfo.io/8.8.8.8/geo');
$request3->on('response', function (\React\HttpClient\Response $response) use (&$datosagrupados) {
    $response->on('data', function ($chunk) use (&$datosagrupados) {
        $datosagrupados[] = ['Request Nº 3' => $chunk];
    });
});


$request->end();
$request2->end();
$request3->end();

$loop->run();

$tend = microtime(true);

// Mostrando el Resultado.
print_r($datosagrupados);

echo PHP_EOL . 'Elapsed: ' . ($tend-$tstart) . ' seconds' . PHP_EOL;
?>
