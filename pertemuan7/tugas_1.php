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
<form action="link3.php" method="get">
    <table cellpadding="5" style="background: pink" style="border: 2px black">
        <tr>
            <td>Masukkan Teks</td>
            <td><textarea name="text" id="" cols="25" rows="3"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="radio" name="btn" id="" value="a"> Tanpa proses
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="radio" name="btn" id="" value="b"> Buang tag HTML
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="radio" name="btn" id="" value="c"> Lewatkan tag HTML
            </td>
        </tr>
        <tr>
            <td><button type="submit">OK</button></td>
        </tr>
    </table>
</form>
</body>
</html>