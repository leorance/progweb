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
<body style="color: red; font-size:200%;">
<center>
<?php 
    $kata = $_GET['kata'];
    $baris = $_GET['baris'];
    $size = $baris;
    for($i=1;$i<=$size;$i++){
        for($k=1;$k<=$i;$k++){
            echo "$kata&nbsp;&nbsp;";
        }
    echo "<br />";
    }
?>
</center>
</body>
</html>