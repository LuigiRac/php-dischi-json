<?php

$album_json = file_get_contents('./albums.json');
$album = json_decode($album_json, true);

// var_dump($album);