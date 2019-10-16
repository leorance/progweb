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
        $btn = $_GET['btn'];
        $text = $_GET['text'];
    ?>
    <?php if ($btn == "a") : ?>
        <h1><?= $text; ?></h1>
    <?php elseif ($btn == "b") : ?>
        <h1><?= strip_tags("$text", ""); ?></h1>
    <?php else : ?>
        <?= htmlspecialchars($text); ?>
    <?php endif; ?>
</body>
</html>