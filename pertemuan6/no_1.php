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
        for ($i=2; $i < 100; $i++) { 
            if ($i % 10 == 0) {
                if ($i % 4 != 0) {
                    echo $i.', ';
                }
            }
        }
    ?>
</body>
</html>