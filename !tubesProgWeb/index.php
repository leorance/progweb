<?php 
    session_start();
    require 'function/function.php';
    if (!isset($_POST['next'])) {
        $_SESSION['attnum'] = 1; // Reset counter
    }
    $id = $_SESSION['attnum'];
    $song = query("SELECT * 
                    FROM mlist 
                    WHERE id = $id");
    $res = "SELECT * FROM mlist";
    $songs = query($res);
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/pure-min.css" integrity="sha384-oAOxQR6DkCoMliIh8yFnu25d7Eq/PHS21PClpwjOTeU2jRSq11vu66rf90/cZr47" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <style>
        .xyz{
            animation: spin 5s infinite;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
	        100% { transform: rotate(360deg); }
        }
    </style>
    <title>Music player</title>
</head>
<body>
<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Playlist</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
    <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="playlist.php">Playlist</a>
      <a class="nav-item nav-link" href="addmusic.php">Add music</a>
    </div>
  </div>
</nav>
<!-- END NAVBAR -->

<!-- AUDIO PLAYER -->
    <center>
<form method="post">
<div style=" display: inline-block; border-radius: 25px; padding: 50px; clear: both;">
<?php $p = 0; ?>
        <?php foreach ($song as $s) : ?>
        <?php echo $_SESSION['attnum'] ?>
        <!-- Next song -->
        <?php if(isset($_POST['next']) || $id == 1 && $_SESSION['attnum'] > 0) : ?>
        <?php $_SESSION['attnum']++ ?>
            <div id="display">
                <img src="img/<?=$s["gambar"]?>" width="200" height="200" style="border-radius : 100px;" id="ty"/>
                <p><?= $s["penyanyi"];?> - <?= $s["judul"]; ?></p>
            </div>
            <audio id="audio" src = "song/<?=$s["lagu"];?>"></audio>
        <!-- End next song -->

        <!-- Previous song -->
        <?php elseif(isset($_POST['prev']) && $_SESSION['attnum'] < count($songs)) : ?>
        <?php $_SESSION['attnum']--; ?>
            <div id="display">
                <img src="img/<?=$s["gambar"]?>" width="200" height="200" style="border-radius : 100px;" id="ty"/>
                <p><?= $s["penyanyi"];?> - <?= $s["judul"]; ?></p>
            </div>
            <audio id="audio" src = "song/<?=$s["lagu"];?>"></audio>
        <?php endif; ?>
        <?php endforeach; ?>
    <?php if (!$song) : ?>
    <?php $_SESSION['attnum'] = 1 ?>
            <div id="display">
                <img src="img/question.png" width="200" height="200" style="border-radius : 100px;" id="ty"/>
                <p>Coming soon</p>
            </div>
    <?php endif ?>
</div>
</form>
</center>
<!-- END AUDIO PLAYER -->

<!-- CONTROL MUSIC -->
<form method="post">
<p style="clear: both; margin-top: 115px;">
	<center>
	<img src="img/S.png" alt="" usemap="#Map" class="col"/>
        <map name="Map" id="Map">
            <area alt="" title="play" onclick="playAudio()" shape="rect" coords="666,14,698,45" id="play"/>
            <button name='next' type="submit" style="visibility: hidden"><area title="next" onclick="nextAudio()" shape="rect" coords="722,24,737,35"/></button>
            <button name='prev' type="submit" style="visibility: hidden"><area alt="" title="prev" onclick="prevAudio()" shape="rect" coords="626,22,641,37" id="prev"/></button>
        </map>
	</center>
</p>
</form>
<!-- END CONTROL MUSIC -->

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="script/control.js"></script>
</body>
</html>