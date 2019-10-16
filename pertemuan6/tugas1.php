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
    <table border="1px">
    <?php 
        for ($i=0; $i < 3; $i++) { 
            for ($j=0; $j < 5; $j++) { 
                if (($i + $j) % 2 == 0) {
                    echo "<img src='a.jpeg' style='width: 100px;'>";
                } else {
                    echo "<img src='xx4.jpg' style='width: 100px;'>";
                }
            }
            echo "<br>\n";
        }
    ?>
    </table>
</body>
</html>