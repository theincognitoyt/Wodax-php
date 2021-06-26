<!DOCTYPE HTML>
<html lang="pl">
<head>
    <title>Podsumowanie zamówienia</title>
    <link rel="stylesheet"href="style.css">
    <meta charset="utf-8"/>
</head>
<body>
<h2>PODSUMOWANIE ZAMÓWIENIA</h2>
    <?php
    $x=$_POST['wodaa'];
    $y=$_POST['wodab'];
    $suma=$y*99.99+$x*0.30;

    echo<<<END
    <table border="1" cellpadding="10" cellspacing="0" color:"white">
    <tr>
    <td>Kranówka(0.30zł/L):</td> <td>$x</td>
    </tr>
    <tr>
    <td>Woda z Lodowca(99.99zł/L):</td> <td>$y</td>
    </tr>
    <tr>
    <td>Suma:</td> <td>$suma</td>
    </tr>
    </table>
    END
    ?>
    <a href="index.html">Powrót do strony Głównej</a>
</body>
</html>