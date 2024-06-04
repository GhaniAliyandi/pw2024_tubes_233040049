<?php
require "functions.php";

$no = 1;
$games = query("SELECT * FROM games");

// tombol cari diklik
if(isset($_POST["cari"]) ) {
  $games = cari($_POST["keywoard"]);
}
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  

  <body>
    <nav class="navbar navbar-expand-lg " style="background-color:rgb(17,52,66);">
      <div class="container-fluid">
        <a class="navbar-brand"style="color:white;" href="#">ADMIN</a>
        <a href="tambah.php" class="btn btn-outline-light">Tambah Data</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            </ul>
            <form action="" method="POST" class="d-flex">
                <input type="text" name="keywoard" placeholder="Masukkan Pencarian..." autocomplete="off" class="keyword form-control me-2">
                <button type="submit" name="cari" class="btn btn-dark" class="tombol-cari">Search</button>
            </form>

          </div>
        </div>
      </nav>
      <br>
      
      
      
      <center>
<h3 class="text-center mb-4 fw-bold" style="padding-top:100px;">GAMES </h3>

<div class="container" id="container">
<div class="row">
    <?php foreach ($games as $gm) : ?>
<div class="col-lg-4 col-md-6 my-2  d-f;ex justify-content-around">

<div class="card" style="width: 18rem;">
  <img src="img/<?= $gm["image"]; ?>" class="card-img-top" alt="...">
  <div class="card-body text-center" style="background-color:darkgrey;">
    <h5 class="card-title"><?= $gm["nama_game"];?></h5>
    <p><?= $gm["rilis"]; ?></p>
    <h5><?= $gm["size"]; ?></h5>
    <br>
    <a href="edit.php?id=<?= $gm["id"]; ?>" class="badge text-bg-primary text-decoration-none">Edit</a>
              <a href="delete.php?id=<?= $gm["id"]; ?>" class="badge text-bg-danger text-decoration-none" onclick="return confirm('yakin?');">Delete</a>
  </div>
</div>
</div>
<?php endforeach; ?>
</div>
</div>

</center>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="js/script.js"></script>
</html>