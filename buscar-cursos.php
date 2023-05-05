<?php
use GuzzleHttp\Client;

$client = new Client();
$response = $client->request('GET', 'https://alura.com.br');