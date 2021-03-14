<?php
$kadi = "6inci";
$pass = "6inci.com";
$postkadi = $_POST['kullaniciadi'];
$postsifre = $_POST['sifre'];

if (($kadi==$postkadi) and ($pass==$postsifre)) {
    echo "giriş başarılı".$postkadi;
} else {
echo "giriş başarısız lütffen bilgilerinizi kontrol ediniz.".$postkadi;
}

?>