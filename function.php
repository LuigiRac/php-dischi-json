<?php
function getAlbums(){
    $album_text = file_get_contents('./albums.json');
    // var_dump($album_text);
    
    return json_decode($album_text, true);
    // var_dump($albums);
}


