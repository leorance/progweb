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
    $month = array('Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 
    'Agustus','September', 'Oktober', 'November', 'Desember');
    $warna = array('red', 'yellow');
    $i = 0;
    foreach ($month as $val) {
        $i++;
        $w = $i % 2;
        echo "<span style='background: $warna[$w];'>$val</span><br>";
    }
    ?>
</body>
</html>