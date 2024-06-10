
<?php
require '../functions.php';
$games = cari($_GET['keyword']);
?>

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
