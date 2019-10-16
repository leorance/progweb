<?php 
    // Calling function controller
    require 'function/function.php';
    // Fetching all music
    error_reporting(0);
    $cari = $_GET['search'];
    $listLagu = query("SELECT *
                   FROM mlist
                   WHERE penyanyi LIKE '%$cari%'
                   OR judul LIKE '%$cari%'");
    // When music is not detected
    if (!$listLagu) {
        echo mysqli_error($conn);
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Music Player</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/pure-min.css" integrity="sha384-oAOxQR6DkCoMliIh8yFnu25d7Eq/PHS21PClpwjOTeU2jRSq11vu66rf90/cZr47" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
      <li class="nav-item active"><a class="nav-link" href="#">Playlist <span class="sr-only">(current)</span></a></li>
      <!-- <li class="nav-item "><a class="nav-link" href="addmusic.php">Add music</li> -->
      <li class="nav-item"><a class="nav-link" href="addmusic.php">Add music</a></li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Cari artis / judul lagu.." aria-label="Search" name="search" id="search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="tbl-cari">Search</button>
    </form>
  </div>
</nav>
<!-- END NAVBAR -->

<!-- ALL MUSIC DATA -->
<div class="container">
<table class="table">
    <tr>
        <th>#</th>
        <th>Aksi</th>
        <th>Penyanyi</th>
        <th>Judul</th>
    </tr>
    <?php $i = 0; ?>
    <?php foreach ($listLagu as $lagu) : ?>
    <tr>
        <td><?= ++$i; ?></td>
        <td><a href="ubah.php?id=<?= $lagu['id']; ?>">Ubah</a></td>
        <td><?= $lagu["penyanyi"] ?></td>
        <td><?= $lagu["judul"] ?></td>
    </tr>
    <?php endforeach; ?>
</table>
</div>
<!-- END ALL MUSIC DATA -->

<script src="script/search.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="script/main.js"></script>
</body>
</html>