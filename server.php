<?php


$titolo = $_POST['titolo'];
$artista = $_POST['artista'];
$url_cover = $_POST['url_cover'];
$anno = $_POST['anno'];
$genere = $_POST['genere'];
    

$album_json = file_get_contents('./albums.json');
$album = json_decode($album_json, true);

// var_dump($album);


$album[] = [
    'titolo' => $titolo,
    'artista' => $artista,
    'url_cover' => $url_cover,
    'anno' => $anno,
    'genere' => $genere
];


$album_json = json_encode($album);
// var_dump($album_update);


file_put_contents('./albums.json', $album_json);