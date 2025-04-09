<?php
require_once './function.php';

$albums = getAlbums();
?>


<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Albums Store</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <style>
    .album-card {
      margin-bottom: 20px;
    }
    .album-card img {
      border-radius: 8px;
    }
    .album-card .card-body {
      text-align: center;
    }
  </style>
</head>
<body>

  
  <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">PHP-DISCHI</a>
  </nav>

 <?php foreach ($albums as $album) { ?>
  '<div class="container mt-4">
    <h1 class="mb-4 text-center">Album</h1>

   
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
     
      <div class="col mb-4">
        <div class="card album-card">
          <img src="" class="card-img-top" alt="Album 1">
          <div class="card-body">
            <h5 class="card-title"></h5>
          </div>
        </div>
      </div>';
 <?php }
  

?>

</body>
</html>
