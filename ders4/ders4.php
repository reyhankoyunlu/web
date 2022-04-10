<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders-4</title>
</head>

<body>

    <h3>Php'de Diziler</h3>
    <ol>
        <li>Dizi oluşturmak için array() fonksiyonu veya [] kullanılabilir.</li>
        <li>Dizi içerisinde farklı türden birçok değer bulunabilir.(int, string, double, obje) (1,2,3,"Ali","Ahmet","125,20") </li>
        <li>"echo $diziAdi" ile dizi içeriği ekrana yazdırılamaz. Array to String Conversion hatası verir. Fakat dizinin örneğin 3 indisine sahip elemanı elemanı "echo $diziAdi[3]" şeklinde yazdırılabilir.</li>
        <li>Dizinin içerisindeki string ifadeler çift tırnak("") içerisine yazılır.</li>
        <li>Dizinin içerisindeki int ifadeler direk yazılabilir.</li>
        <li>Dizinin elemanları birbirinden virgül(,) ile ayrılır.</li>
        <li>Dizi içerisinde indisler varsayılan olarak 0'dan başlar.</li>
        <li>Diziler içerisinde diziler tanımlanabilir.</li>
    </ol>
    <?php


$telno="+05317301815";
$yenitelno=str_split($telno,3);
echo " telno:";
for ($i = 0; $i < count($yenitelno); $i++) {
    echo $yenitelno[$i] . " ";
}
    
    $dizi1=array(1,2,3,4,"reyhan","koyunlu",13.5);
    $dizi2=[1,"ikoculuk",13.55];

    echo"<pre>";
    print_r($dizi1);
    echo"</pre>";

    echo"<pre>";
    print_r($dizi2);
    echo"</pre>";

    echo"dizinin 4. elemanı: $dizi1[4]";
    echo"<br>";
    echo"dizinin 4. elemanının tipi:". gettype($dizi1[4]);

    echo"<h3>Dizinin içeriğinin foreach ile yazdırılması-1</h3>";

    foreach ($dizi1 as $value) {
        echo $value . "<br>";
    }
    
    echo"<h3>Dizinin içeriğinin foreach ile yazdırılması-2</h3>";
    foreach ($dizi1 as $key => $value) {
        echo"$key - $value <br>";
    }

    echo"<h3>Dizinin içeriğinin for ile yazdırılması-3</h3>";
    for ($i=0; $i < count($dizi1) ; $i++) { 
        echo $dizi1[$i] . "<br>";
    }

    $sayilar=array(1,2,3,4,5,6);
    $sayilar=array(
        array(1,3,5,7,9), array(2,4,6,8,10)
    );

        echo"<pre>";
        print_r($sayilar);
        echo"</pre>";

        echo"sayılar dizisinin içindeki 2.dizinin 3.elemanı:". $sayilar[1][2];
        echo"<br>sayılar dizisinin içindeki 1.dizinin 4. indisli elemanı:". $sayilar[0][4];

        echo"<br>";



        $sayilar=array(
            "integer"=>array(55,13,20,89,70),
            "double"=>array(6.8,45.5,78.12,)
        );
        echo"<pre>";
        print_r($sayilar);
        echo"</pre>";

        echo"sayılar dizisinin içindeki 1.dizinin 2.elemanı:". $sayilar["integer"][1];
        echo"<br>sayılar dizisinin içindeki 1.dizinin 2 indisli elemanı:". $sayilar["double"][2];

        echo"<br>";

        $bilgiler=array(
            "id"=>"0",
            "adi"=>"reyhan",
            "soyadi"=>"koyunlu",
            "gsm"=>"531 730 18 15",
            "yas"=>"19"
        );
        echo"<pre>";
        print_r($bilgiler);
        echo"</pre>";
        echo"$bilgiler[adi] $bilgiler[soyadi] hoşgeldiniz...";


        $kullanicilar=array(
            "kullanici1"=>array(55,13,20,89,70),
            "kullanici2"=>array(6.8,45.5,78.12,)
        );

        $kullanicilar=array(
        "kullanici1" => array(
            "id"=>"0",
            "adi"=>"reyhan",
            "soyadi"=>"koyunlu",
            "gsm"=>"531 730 18 15",
            "yas"=>"19",
        ),
        "kullanici2"=>array(
            "id"=>"0",
            "adi"=>"ilker",
            "soyadi"=>"kücük",
            "gsm"=>"531 351 59 46",
            "yas"=>"19",
        )
        );

        echo"<pre>";
        print_r($kullanicilar);
        echo"</pre>";

    ?>
</body>
<pre></pre>
</html>