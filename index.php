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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
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
  <div class="container mt-4">
    <!-- <h1 class="mb-4 text-center"><?php echo $album['titolo'];?></h1> -->
      <div class="col mb-4">
        <div class="card album-card">
          
          <div class="card-body">
            <h3 class="card-title"><?php echo $album['titolo'];?></h3>
            <img src="" class="card-img-top" alt="<?php echo $album['titolo'];?>">
            <h5><?php echo $album['artista'];?></h5>
            <h5><?php echo $album['anno'];?></h5>
            <h5><?php echo $album['genere'];?></h5>
          </div>
        </div>
      </div>
 <?php }
  

?>

</body>
</html>
