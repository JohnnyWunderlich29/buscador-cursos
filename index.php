<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;
use Alura\BuscadorCursos\Buscador;

$client = new Client([
    'base_uri' => 'https://www.alura.com.br/',
    'verify' => false
]);

$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscar('GET','/cursos-online-programacao/php');


?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Alura cursos</title>
</head>
<body>
    <section class="container-flex">
        <h1 class="title">Cursos importados da Alura com composer, gizzle e crawler</h1>
        <ul class="card-list">
            <?php foreach ($cursos as $curso):?>
            <li class="card-items">
                <a class="link-item" href="http://"><?=$curso?></a>
            </li>
            <?php endforeach; ?>
        </ul>
    </section>
</body>
</html>