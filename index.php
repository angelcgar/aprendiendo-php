<?php

const API_URL = "https://whenisthenextmcufilm.com/api";

$ch = curl_init(API_URL);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// $result = file_get_contents(API_URL);
$result = curl_exec($ch);
$data = json_decode($result, true);

curl_close($ch);




?>

<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Pelicula de marvel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link rel="shortcut icon" href="https://app.diagrams.net/favicon.ico" type="image/x-icon">
</head>

<main>
    <!-- <pre>
            <?php var_dump($data) ?>
        </pre> -->

    <section>
        <img src="<?= $data["poster_url"]; ?>" width="300" alt="una imagen de <?= $data["title"]; ?>" style="border-radius: 12px;">
    </section>

    <hgroup>
        <h2><?= $data["title"] ?> se estrena en <?= $data["days_until"] ?> días</h2>
        <p>Fecha de estreno: <?= $data["release_date"] ?></p>
        <p>La siguiente pelicula es <?= $data["following_production"]["title"] ?></p>
    </hgroup>
</main>

</html>
<style>
    :root {
        color-scheme: dark light;
    }

    html {
        font-family: system-ui, sans-serif;
    }
    
    section {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    hgroup {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
    }
</style>
