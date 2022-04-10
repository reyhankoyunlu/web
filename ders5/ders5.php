<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $isimler = array();
    $isimler[0] = "reyhan";
    $isimler[0] = "ilker";
    $isimler[0] = "efe";
    $isimler[0] = "emre";
    $isimler[0] = "enes";

    echo "<pre>";
    print_r($isimler);
    echo "</pre>";


    $isimler2 = array();
    $isimler2["isim1"] = "reyhan";
    $isimler2["isim2"] = "ilker";
    $isimler2["isim3"] = "efe";
    $isimler2[] = "emre";
    $isimler2[] = "enes";

    echo "<pre>";
    print_r($isimler2);
    echo "</pre>";

    $ogrencidetay = array(
        "id" => 1,
        "adi" => "reyhan",
        "soyadi" => "koyunlu",
        "bolum" => "bilgisayar",
        "yas" => "19",
        "dersler" => array(
            "ders1" => "veritabanı",
            "ders2" => "web programlama",
            "ders3" => "mobil programlama"
        ),
        "sinif" => "2"
    );


    /* Uygulama-5: Öğrenci Detayı Dizisini Alt Alta döngüleri kullanarak yazdırınız. */

    echo "<pre>";
    print_r($ogrencidetay);
    echo "</pre>";

    echo "öğrencinin dersleri: <br>";
    echo $ogrencidetay["dersler"]["ders1"] . "<br>";
    echo $ogrencidetay["dersler"]["ders2"] . "<br>";
    echo $ogrencidetay["dersler"]["ders3"] . "<br> <br>";




    






    /* Uygulama-4: Öğrenci Detayları Dizisindeki Her Öğrencinin Detaylarını Alt Alta yazdırınız. */





    ?>

    <h3>Koşul İfadeleri(if-else)</h3>
    <p>İf-else bloklarında öncelikle koşul belirtilir ve sonraki dallanma koşula göre devam eder.</p>

    <h5>Karşılaştırma Operatörleri</h5>
    <ol>
        <li> == ($a == $b) Eşit ise. (Genellikle matematiksel bir karşılaştırma yapılır.)</li>
        <li> === ($a === $b) Denk ise. (Genellikle string bir karşılaştırma yapılır.)</li>
        <li> != ($a! = $b) Eşit değil ise. (Genellikle matematiksel bir karşılaştırma yapılır.)</li>
        <li> !== ($a! == $b) Denk değil ise. (Genellikle string bir karşılaştırma yapılır.)</li>
        <li> > ($a > $b) Büyük ise.</li>
        <li> >= ($a >= $b) Büyük veya eşit ise.</li>
        <li>
            < ($a < $b) Küçük ise.</li>
        <li>
            <= ($a <=$b) Küçük eşit ise.</li>
    </ol>

    <h5>Mantıksal Opreatörler</h5>
    <ol>
        <li> ! (olumsuzsa) (!$a)-->$a'nın değeri False ise True döner. Aksini yapar olumsuz mu diye sorar </li>
        <li> && - AND (ve) ($a && $b) -->$a ve $b'nin değeri olumlu ise true döner, iki koşşul da sağlanmak zorundadır. Koşullardan bir tanesi False dönerse genel değer False olur</li>
        <li> || -OR ($a || $b) --> $a'nın veya $b'nin herhangi birisinin değeri olumlu ise sonuç True olarak döner. Herhangi birisinin koşulu sağlaması genel dönüşü True yapar.</li>
    </ol>

    <h4>NOT:</h4>
    <ol>
        <li>Elseif sürekli tekrar eden sorgu bloğu açar.</li>
        <li>Else son kapanış koşuludur.(Herhangi bir şart belirtilmez. Hiçbir önkoşul gerçekleşmediğinde çalışacak son koşuldur. )</li>
    </ol>

    <?php

    /* if (condition) {
        # code...
    }elseif (condition) {
        # code...
    }elseif (condition) {
        # code...
    }elseif (condition) {
        # code...
    }else {
        # code...
    } */

    $sayi1 = 123;
    $sayi2 = 345;
    $metin = "Adü";

    /* Değer Varsa */
    if ($sayi1) {
        echo "<br>If bloğu çalıştı : $sayi1";
    } else {
        echo "<br>Else bloğu çalıştı : $sayi1";
    }

    /* Değer Yoksa */
    if (!$sayi1) {
        echo "<br>If bloğu çalıştı : $sayi1";
    } else {
        echo "<br>Else bloğu çalıştı";
    }

    /* eşitlik Varsa */
    if ($sayi1 == $sayi2) {
        echo "<br>Sayılar Eşit: $sayi1 = $sayi2";
    } else {
        echo "<br>Sayılar Eşit Değil: $sayi1 != $sayi2";
    }

    /* eşitlik Yoksa Varsa */
    if ($sayi1 != $sayi2) {
        echo "<br>Sayılar Eşit Değil: $sayi1 != $sayi2";
    } else {
        echo "<br>Sayılar Eşit: $sayi1 = $sayi2";
    }

    /* Denklik Varsa */
    if ("ogrenci" === "ogrenci") {
        echo "<br>Girilen değerler aynı";
    } else {
        echo "<br>Girilen değerler aynı değil.";
    }

    /* Denklik Varsa */
    if ($metin === "Adü") {
        echo "<br>Girilen değerler aynı : $metin";
    } else {
        echo "<br>Girilen değerler aynı değil.";
    }

    /* And Örneği */
    if (($sayi1 < $sayi2) and ("ogrenci" === "ogrenci")) {
        echo "<br>Koşullar Sağlandı";
    } else {
        echo "<br>Koşullar sağlanmadı.";
    }

    /* OR Örneği */
    if (($sayi1 < $sayi2) or (15 > 25)) {
        echo "<br>Koşullar Sağlandı";
    } else {
        echo "<br>Koşullar sağlanmadı.";
    }


    if ($sayi1 > $sayi2) {
        echo "<br> \$sayi1 Değişkeni \$sayi2 değişkeninden büyüktür. $sayi1>$sayi2";
    } else {
        echo "<br> \$sayi1 Değişkeni \$sayi2 değişkeninden küçüktür. $sayi1<$sayi2";
    }

    if ($sayi1 >= $sayi2) {
        echo "<br> \$sayi1 Değişkeni \$sayi2 değişkeninden büyüktür veya eşittir. $sayi1>=$sayi2";
    } else {
        echo "<br> \$sayi1 Değişkeni \$sayi2 değişkeninden küçüktür. $sayi1<$sayi2 <br> <br>";
    }



    /* uygulama: */
    //1-Rasgele 0-100 arasında üretilen değerin tek veya çift olduğunu ekrana yazdırınız. 

    $sayi = rand(0, 100);
    if ($sayi % 2 == 0) {
        echo "Rastgele gelen sayı çifttir : " . $sayi  . "<br><br>";
    } else {
        echo "Rastgele gelen sayı tektir : " . $sayi . "<br><br>";
    }


    //2-Rasgele 0-100 arasında üretilen değerin 50'den küçük olduğu durumlarda kaldınız, büyükse geçtiniz yazdırınız.

    $sayi = rand(0, 100);
    if ($sayi < 50) {
        echo "KALDINIZ : " . $sayi . "<br><br>";
    } elseif ($sayi >= 50) {
        echo "GEÇTİNİZ : " . $sayi . "<br><br>";
    }


    //3-Doğum yılına göre 18 yaşından büyük olanların ehliyet alabileceğini kontrol eden if bloğunu yazınız. 


    $dogumtarihi = rand(1950, 2021);
    $buyıl = 2022;
    $yas = $buyıl - $dogumtarihi;
    $kalanyıl=$dogumtarihi-2004;

    if ($dogumtarihi <= 2003) {
        echo "ehliyet alabilirsiniz, yaşınız : " . $yas;
    } elseif ($dogumtarihi > 2003) {
        echo "ehliyet alamazsınız, yaşınız : " . $yas . "<br>"."ehliyet almanıza $kalanyıl yıl kaldı ";
    }


    ?>


</body>

</html>