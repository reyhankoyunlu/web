<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    /* uygulama: rastgele üretilen sayı 50'den büyükse
    geçtiniz:notunuz:xx
    50'den küçükse
    kaldınız:notunuz:xx
    */
    $rastgelesayi = rand(10, 100);
    if ($rastgelesayi >= 50) {
        echo "Geçtiniz - Notunuz: $rastgelesayi";
    } else {
        echo "Kaldınız - Notunuz: $rastgelesayi";
    }
    ?>
</body>

</html>