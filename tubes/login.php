<?php
session_start();

if (isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}

require 'functions.php';

if (isset($_POST["login"])) {
    $login = login($_POST);
}

$games = query("SELECT * FROM games");


//tombol cari diklik
if (isset($_POST["cari"])) {
  $games = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">

    <style>
        label {
            display: block;
        }
    </style>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg " style="background-color:rgb(17,52,66);">
      <div class="container-fluid">
        <a class="navbar-brand"style="color:white;" href="#">USER</a>
        <a href="#login">login</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            </ul>
            <form action="" method="POST" class="d-flex">
                <input type="text" name="keyword" placeholder="Masukkan Pencarian..." autocomplete="off" class="keyword form-control me-2">
                <button type="submit" name="cari" class="btn btn-dark" class="tombol-cari">Search</button>
            </form>

          </div>
        </div>
      </nav>
 <br><br> 
  <!-- isi -->
  <section id= "games">
  <div id="container" class="container">   
    <center><h1>GAMES</h1></center>
    <br>

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
    <a href="details.php?id=<?= $gm["id"]; ?>" class="badge text-bg-dark text-decoration-none">details</a>
  </div>
</div>
</div>
<?php endforeach; ?>
  </div>
  </section>


  <!-- login -->
  <br><br><br><br><br><br><br>
    <section id="login">
    <div class="wrapper">
        <div class="login_box">
            <div class="login_header">
                <?php if (isset($login['error'])) : ?>
                    <p><?= $login['pesan']; ?></p>
                <?php endif; ?>
                <span>Login</span>
            </div>

            <form action="" method="post">
                <div class="input_box">
                    <input type="text" id="username" name="username" class="input-field">
                    <label for="username" autofocus autocomplete="off" required>Username</label>
                </div>
                <div class="input_box">
                    <input type="text" id="password" name="password" class="input-field">
                    <label for="password" autofocus autocomplete="off" required>Password</label>
                </div>
                <div class="input_box">
                    <input type="submit" name="login" value="login" class="input-submit">
                    <center><p>Don't Have An Account?<a href="registrasi.php"> Sign Up Here</a></center>
                </div>
        </div>
    </div>
    </form>
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="js/script_user.js"></script>
</html>