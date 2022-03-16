<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders2</title>
</head>

<body>
    <?php

    echo "<h4>Tırnak işaretleri arasındaki farklar</h4>";

    $uni = "Adnan Menderes Üniversitesi";
    echo "Değişken içeriği: $uni";
    echo "<br/>";

    //  değişkenin ismini yazdırır
    echo "1-Kazandığınız üniversite:" . '$uni';
    echo "<br/>";

    //  değişkenin içeriğini yazdırır
    echo "2-Kazandığınız üniversite:" . "$uni";
    echo "<br/>";

    //  değişkenin içeriğini yazdırır
    echo "3-Kazandığınız üniversite:" . $uni;
    echo "<br/>";

    //  değişkenin içeriğini yazdırır
    echo "4-Kazandığınız üniversite:$uni";
    echo "<br/>";

    echo "<hr><h4>Temel Matematiksel İşlemler</h4>";


    echo "<h5>Toplama işlemi</h5>";

    $sayi1 = 10;
    $sayi2 = 20;
    echo '$sayi1 + $sayi2 = ' . ($sayi1 + $sayi2);
    echo "<br>";
    echo "$sayi1 + $sayi2 = " .  ($sayi1 + $sayi2);
    echo "<br>";
    $sonuc = $sayi1 + $sayi2;
    echo "$sayi1 + $sayi2 = $sonuc";
    echo "<hr>";


    echo "<h5>Çıkarma işlemi</h5>";

    $sayi1 = 10;
    $sayi2 = 20;
    echo '$sayi1 - $sayi2 = ' . ($sayi1 - $sayi2);
    echo "<br>";
    echo "$sayi1 - $sayi2 = " .  ($sayi1 - $sayi2);
    echo "<br>";
    $sonuc = $sayi1 - $sayi2;
    echo "$sayi1 - $sayi2 = $sonuc";
    echo "<hr>";



    echo "<h5>Çarpma işlemi</h5>";

    $sayi1 = 10;
    $sayi2 = 20;
    echo '$sayi1 * $sayi2 = ' . ($sayi1 * $sayi2);
    echo "<br>";
    echo "$sayi1 * $sayi2 = " .  ($sayi1 * $sayi2);
    echo "<br>";
    $sonuc = $sayi1 * $sayi2;
    echo "$sayi1 * $sayi2 = $sonuc";
    echo "<hr>";


    echo "<h5>Bölme işlemi</h5>";

    $sayi1 = 10;
    $sayi2 = 20;
    echo '$sayi1 / $sayi2 = ' . ($sayi1 / $sayi2);
    echo "<br>";
    echo "$sayi1 / $sayi2 = " .  ($sayi1 / $sayi2);
    echo "<br>";
    $sonuc = $sayi1 / $sayi2;
    echo "$sayi1 / $sayi2 = $sonuc";
    echo "<hr>";


    echo "<h5>Üst Alma işlemi</h5>";
    $x = 3;
    $y = "2";
    echo "$x<sup>$y</sup>= " . (pow($x, $y));
    echo "<br> Değişken Tipi: $y >>>" . gettype($y) . "<br>";
    echo "<hr>";


    echo "<h5>Karekök Alma işlemi(sqrt)</h5>";
    $x = 25;
    $karekok = sqrt($x);
    echo "$x'in karekökü: $karekok";
    echo "<hr>";


    echo "<h5>Mutlak Değer işlemi(abs)</h5>";
    $x = (-4);
    $mutlak = abs($x);
    echo "|$x|'in mutlak değeri: $mutlak";
    echo "<hr>";



    echo "<h5>Taban Değişim İşlemi(base_convert(x,taban1,taban2))</h5>";
    $sayi = 30;
    $taban = 10;
    $yenitaban = 2;
    echo "27 sayısının ikilik tabandaki karşılığı:" . base_convert(27, 10, 2);
    echo "<br>";
    $sonuc = base_convert($sayi, $taban, $yenitaban);
    echo "($sayi)<sub>$taban</sub>: ($sonuc)<sub>$yenitaban</sub>";
    echo "<hr>";


    echo "<h5>Mod İşlemi(fmod(x,y))</h5>";
    $x = 20;
    $y = 4;
    $mod = fmod($x, $y);
    echo "$x mod $y =$mod";
    echo "<br>";
    echo "$x Sayısı:" . ((fmod($x, 2) == 0) ? " Çifttir." : "Tektir.");
    echo "<hr>";


    echo "<h5>Yuvarlama İşlemi(round(x,y))</h5>";
    $x = 15.315;
    $y = 15.375;
    echo "<br> $x 1 ondalık sayı yuvarlanması:" . round($x, 1);
    echo "<br> $y 1 ondalık sayı yuvarlanması:" . round($y, 1);
    echo "<br> $x 1 ondalık sayı yuvarlanması:" . round($x, 2);
    echo "<br> $y 1 ondalık sayı yuvarlanması:" . round($y, 2);
    echo "<hr>";



    echo "<h5>Yuvarlama İşlemi(floor(x))</h5>";

    /*her zaman en yakın aşağı tam sayı değerine yuvarlama işlemi yapar */
    $x == 15.315;
    echo "$x : " . floor($x);
    echo "<hr>";


    echo "<h5>Yuvarlama İşlemi(ceil(x))</h5>";

    /*her zaman en yakın yukarı tam sayı değerine yuvarlama işlemi yapar */
    $x == 15.385;
    echo "$x : " . ceil($x);
    echo "<hr>";


    echo "<h5>Rastgele Sayı Üretme(rand())</h5>";

    // for($i=0;$i<10;$i++){
    //     echo "<br>  10-100 arası rastgele değer: ". rand(10,100);
    // }

    for($i=0;$i<10;$i++){
        echo "<br>$i Eleman:". rand(10,100);
    }


    // echo phpinfo();-->php versiyonunu gösteren komut
    ?>

</body>


</html>