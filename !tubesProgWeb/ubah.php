<?php 
    require 'function/function.php';
    $id = $_GET['id'];
    $rs = query("SELECT * FROM mlist WHERE id = $id");
    if (isset($_POST["submit"])) {
      if (ubah($_POST) > 0) {
          echo "<script>
                  alert('Data berhasil di tambahkan');
                  document.location.href = 'playlist.php'
              </script>";
      } else {
          echo "<script>alert('Data gagal di tambahkan');</script>";
          echo mysqli_error($conn);
      }
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Add Music</title>
  <link rel="stylesheet" href="css/add.css">
  <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/pure-min.css" integrity="sha384-oAOxQR6DkCoMliIh8yFnu25d7Eq/PHS21PClpwjOTeU2jRSq11vu66rf90/cZr47" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Playlist</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
    <a class="nav-item nav-link" href="index.php">Home</a>
      <a class="nav-item nav-link active" href="playlist.php">Playlist <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="addmusic.php">Add music</a>
    </div>
  </div>
</nav>
<br>
<!-- End navbar -->
<!-- Adding music form -->
<div class="container" style="padding: 30px;">
<?php foreach ($rs as $val) : ?>
  <form method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="col-25">
      <label for="fname">Artist</label>
    </div>
    <div class="col-75">
      <input type="hidden" name="laguLama" value="<?= $val['lagu'].".mp3"; ?>">
      <input type="hidden" name="gambarLama" value="<?= $rs['gambar']; ?>">
      <input type="hidden" name='lagu' value="<?= $rs['lagu'].".mp3" ?>">
      <input type="text" id="fname" name="penyanyi" placeholder="Masukkan nama penyanyi.." value="<?= $val['penyanyi'] ?>">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Judul</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="judul" placeholder="Masukkan judul lagu.." value="<?= $val['judul'] ?>">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="gambar">Gambar</label>
    </div>
    <div class="col-75">
      <img src="img/<?= $val['gambar']?>" alt="" style="width:100px;"><br>
      <input type="file" name="gambar" id="gambar">
    </div>
  </div>
  <div class="row">
    <input type="submit" value="Submit" name="submit">
  </div>
  </form>
  <?php endforeach; ?>
</div>
<!-- End add music form -->
</body>
</html>