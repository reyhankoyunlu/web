<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<fieldset >
    <legend>Bilgileriniz</legend>
    <form action="" style="text-align: center ;">
        <label for="">Adınız:</label><br>
        <input type="text" name="Ad:" required><br><br><br>

        <label for="">Soyadınız:</label><br>
        <input type="text" name="Soyad:" required><br><br><br>

        <label for="">E-Mail:</label><br>
        <input type="email" name="E-Mail:" required><br><br><br>

        <label for="">Telefon:</label><br>
        <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required name="Telefon:"><br>
        <small>Örnek:531-730-1815</small><br><br><br>

        <label >Cinsiyetiniz:</label><br><br>
        <input class="cins" type="radio" name="cinsiyet" value="kadın">
        <label for="">Kadın</label><br>

        <input class="cins" type="radio" name="cinsiyet" value="erkek">
        <label for="">Erkek</label><br><br><br>
        

        <label for="">Dersler:</label><br>
        <select name="Dersler" id="">
            <option value="yazılım mimarileri">Yazılım Mimarileri</option>
            <option value="web programlama">Web Programlama</option>
            <option value="sunucu işletim sistemleri">Sunucu İşletim Sistemleri</option>
        </select><br><br>

        <label for="">Notunuz:</label><br>
        <textarea name="Notunuz:" id="" cols="21" rows="10"></textarea><br><br>

        <input class="btn" type="submit" name="gönder" value="GÖNDER" width="120px">
        <input class="btn" type="reset" name="sil" value="SİL">
    </form>
    </fieldset>
    
    
</body>
</html>