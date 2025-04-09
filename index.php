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
  

</head>
<body>

  
  <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">PHP-DISCHI</a>
  </nav>

  <div class="container py-5">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php foreach ($albums as $album) { ?>

            <div class=" col">
                <div class="card m-1 p-2 rounded-3 shadow-lg">
                    <h3 class="card-title"><?php echo $album['titolo'];?></h3>
                    <img src="<?php echo $album['url_cover'];?>" class="card-img-top" alt="<?php echo $album['titolo'];?>">
                    <h5><?php echo $album['artista'];?></h5>
                    <h5><?php echo $album['anno'];?></h5>
                    <h5><?php echo $album['genere'];?></h5>
                </div>
            </div>


        <?php } ?>
    </div>


    <form class="container" action="server.php" method ="POST">
              <div class="form-control">
                <input type="text" id="new-album" name="new-album">

                <button>Aggiungi album</button>
              </div>
          
    </form>
</div>

</body>
</html>
