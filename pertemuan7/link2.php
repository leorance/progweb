<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <?php 
        $kalimat = $_GET['kalimat'];
        $warna = $_GET['warna'];
        $background = $_GET['bg'];
        $border = $_GET['bd'];
    ?>
    <div style="color: <?= $warna ?>; background: <?= $background ?>; border: 2px <?= $border ?>;">
        <?= $kalimat ?>
    </div>
</body>
</html>