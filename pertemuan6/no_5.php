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
    ?>
        <select name="" id="">
        <?php foreach($month as $key) :?>
            <option value="<?= $key ?>"><?= $key ?></option>
        <?php endforeach; ?>
        </select>
</body>
</html>