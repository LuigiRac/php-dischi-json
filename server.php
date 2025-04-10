<?php

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


$album_update = json_encode($album);
// var_dump($album);