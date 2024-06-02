<?php
require '../tubes/functions.php';

$keyword = $_GET["keyword"];

$query = "SELECT * FROM games WHERE
        nama_game LIKE '%$keyword%' OR 
        rilis LIKE '%$keyword%' OR   
        size LIKE '%$keyword%'
        ";
$gm = query($query);

?>

<?php foreach ($games as $gm) : ?>
<div class="col-lg-4 col-md-6 my-2  d-f;ex justify-content-around">

<div class="card" style="width: 18rem;">
  <img src="img/<?= $gm["image"]; ?>" class="card-img-top" alt="...">
  <div class="card-body text-center" style="background-color:darkgrey;">
    <h5 class="card-title"><?= $gm["nama_game"];?></h5>
    <p><?= $gm["rilis"]; ?></p>
    <h5><?= $gm["size"]; ?></h5>
    <br>
    <a href="edit.php?id=<?= $gm["id"]; ?>" class="badge text-bg-secondary text-decoration-none">Edit</a>
              <a href="delete.php?id=<?= $gm["id"]; ?>" class="badge text-bg-danger text-decoration-none" onclick="return confirm('yakin?');">Delete</a>
  </div>
</div>
</div>
<?php endforeach; ?>