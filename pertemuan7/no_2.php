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
<form action="link2.php" method="get">
    <div style=" border: 2px solid black; background: pink; ">
        <table width="88%" cellpadding="3">
            <tr>
                <td>Kalimat</td>
                <td><textarea name="kalimat" id="" cols="25" rows="3"></textarea></td>
            </tr>
            <tr>
                <td>Warna</td>
                <td style="padding: 20px;">
                    <input type="radio" name="warna" id="" value="white">Putih &nbsp;
                    <input type="radio" name="warna" id="" value="yellow">Kuning &nbsp;
                    <input type="radio" name="warna" id="" value="green">Hijau
                </td>
            </tr>
            <tr>
                <td>Background</td>
                <td style="padding: 20px;">
                    <input type="radio" name="bg" id="" value="red">Merah &nbsp;&nbsp;
                    <input type="radio" name="bg" id="" value="black">Hitam &nbsp;
                    <input type="radio" name="bg" id="" value="blue">Biru
                </td>
            </tr>
            <tr>
                <td>Border</td>
                <td style="padding: 20px;">
                    <input type="radio" name="bd" id="" value="solid">Solid&nbsp;
                    <input type="radio" name="bd" id="" value="dashed">Dashed&nbsp;
                    <input type="radio" name="bd" id="" value="dotted">Dotted
                </td>
            </tr>
            <tr>
                <td><button type="submit">OK</button></td>
            </tr>
        </table>
    </div>
</form>
</body>
</html>