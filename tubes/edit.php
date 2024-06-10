<?php
// session_start();

// if(!isset($_SESSION['login'])){
//   header( "Location: login.php ");
//   exit;
// }

require 'functions.php';
// ambil data url
$id = $_GET["id"];

// query data sport
$gm = query("SELECT * FROM games WHERE id = $id")[0];


if (isset($_POST["edit"])) {

    if (edit($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil diedit!');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "  
        <script>
            alert('data gagal diedit!');
            document.location.href = 'index.php';
        </script>";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container col-8">
        <h1>Edit Data Games</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $gm["id"]; ?>">
           
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image" value="<?= $gm["image"]; ?>">
            </div>
            <div class="mb-3">
                <label for="nama_game" class="form-label">Nama Games</label>
                <input type="text" class="form-control" id="nama_game" name="nama_game" require value="<?= $gm["nama_game"]; ?>">
            </div>
            <div class="mb-3">
                <label for="rilis" class="form-label">rilis</label>
                <input type="text" class="form-control" id="rilis" name="rilis" value="<?= $gm["rilis"]; ?>">
            </div>
            <div class="mb-3">
                <label for="size" class="form-label">size</label>
                <input type="text" class="form-control" id="size" name="size" value="<?= $gm["size"]; ?>">
            </div>
            <div class="mb-3">
                <label for="details" class="form-label">Details</label>
                <input type="text" class="form-control" id="details" name="details" value="<?= $gm["details"]; ?>">
            </div>
            <button type="submit" name="edit" class="btn btn-primary">edit</button>
        </form>
</body>
</html>