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
    <?php for($i = 1;$i <= 3;$i++) : ?>
        <tr>
        <?php for($j = 1;$j <= 5;$j++) : ?>
            <?php if(($i + $j)%2 == 0) : ?>
            <td style="background: yellow"><?= $i ?>, <?= $j ?></td>
            <?php else :  ?>
            <td style="background: red"><?= $i ?>, <?= $j ?></td>
            <?php endif; ?>
        <?php endfor; ?>
        </tr>
    <?php endfor; ?>
    </table>
</body>
</html>