<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    echo "<h3>Sık Kullanılan String Fonksiyonlar</h3>";
    $yazi = "Aydın Adnan Menderes Üniversitesi";
    echo "\$yazi değişken içeriği: $yazi";
    echo "<br>\$yazi değişken türü:" . gettype($yazi);
    echo "<hr><br>";

    echo "<h3>İçeriğin Büyük Harfe Dönüştürülmesi</h3>";
    echo "<br>\$yazi değişkeninin büyük harfle yazılması:" . $byazi = strtoupper($yazi);
    echo "<br>\$yazi değişkeninin büyük harfle yazılması:" . $byazi = mb_strtoupper($yazi);
    echo "<hr><br>";

    echo "<h3>İçeriğin Küçük Harfle Yazılması</h3>";
    echo "<br>\$yazi değişkeninin küçük harfle yazılması:" . $kyazi = strtolower($byazi);
    echo "<br>\$yazi değişkeninin küçük harfle yazılması:" . $kyazi = mb_strtolower($byazi);
    echo "<hr><br>";

    echo "<h3>İçeriğin İlk Harfinin Büyük Yazılması</h3>";
    echo "<br>\$yazi değişkeninin ilk harfinin büyük yazılması:" . $yazi = ucfirst($kyazi);
    echo "<br>\$yazi değişkeninin ilk harfinin büyük yazılması:" . $yazi = ucwords($kyazi);
    echo "<hr><br>";

    echo "<h3>İçeriğin Harf Sayısı</h3>";
    echo "<br>\$yazi değişkeninin harf sayısı: " . strlen($yazi);
    echo "<hr><br>";

    echo "<h3>ASCII Char Dönüşümü</h3>";
    echo "Karakter karşılığı(65):" . chr(65);
    echo "<hr><br>";

    echo "<h3>0-255 arasındaki değerleri chr fonksiyonuna sokarak satır olarak yazdırılması</h3>";
    for ($i = 33; $i < 127; $i++) {
        echo "<br>0-255 arasındaki değerler: " . chr($i) . "<br>";
    }
    echo "<hr><br>";

    echo "<h3>Metnin Parçalanarak Diziye Dönüştürülmesi</h3>";
    $dizi = explode(" ", $yazi);
    echo "<pre>";
    print_r($dizi);
    echo "</pre>";
    echo "<hr><br>";

    echo "<h3>Metnin İçindeki Kelime Ve Cümle Sayısının Alt Alta Yazılımı</h3>";
    $metin =
        "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis vel similique sit itaque enim sapiente mollitia, ad facere aut dolores facilis! Facilis repellendus iste illum magnam accusamus illo minima. Numqua Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur aliquam necessitatibus cum consequuntur magni? Suscipit, ducimus! Nobis, reprehenderit? Mollitia beatae, vel iure impedit voluptates magnam minima consectetur quod maiores illum.";
    echo "<br>\$metin değişkenindeki harf sayısı: " . strlen($metin);
    echo "<br>";
    echo "<br>\$metin değişkeninin kelime sayısı:";
    $kelime = explode(" ", $metin);
    echo count($kelime);
    echo "<br>";
    echo "<br>\$metin değişkeninin cümle sayısı:";
    $cumle = explode(".", $metin);
    echo count($cumle);
    echo "<hr><br>";

    echo "<h3>Veritabanından Gelen 2022-11-20 Şeklindeki Tarihi 20.11.2022 Şeklinde Ekrana Yazdırma</h3>";
    $tarih = "2022-11-20";
    $tarihdizisi = explode("-", $tarih);
    echo "<pre>";
    print_r($tarihdizisi);
    echo "</pre>";
    echo "Tarih:$tarihdizisi[2].$tarihdizisi[1].$tarihdizisi[0]";
    echo "<hr><br>";

    echo "<h3>Dizinin Metine Dönüştürülmesi</h3>";
    $aylardizisi = array("Ocak", "Şubat", "Mart");
    echo "<pre>";
    print_r($aylardizisi);
    echo "</pre>";
    echo $aylarstring = implode("-", $aylardizisi);
    echo "<hr><br>";

    echo "<h3>str_split string parçalama işlemi</h3>";
    $iban = "TR001234123412341234";
    $yeniiban = str_split($iban, 4);
    echo "<pre>";
    print_r($yeniiban);
    echo "</pre>";
    echo "foreach iban:";
    foreach ($yeniiban as $parca) {
        echo "$parca";
    }
    echo "<br>";
    echo "implode iban:" . implode("-", $yeniiban);
    echo "<br>";
    echo "for iban:";
    for ($i = 0; $i < count($yeniiban); $i++) {
        echo $yeniiban[$i] . " ";
    }

    ?>

</body>

</html>