<?php
if(isset($_POST["YKullanici"])){
    $YKullanici = guvenlik($_POST["YKullanici"]);
}else{
    $YKullanici ="";
}
if(isset($_POST["YSifre"])){
    $YSifre = guvenlik($_POST["YSifre"]);
}else{
    $YSifre ="";
}


$MD5sifre = md5($YSifre);

if(($YKullanici!="") and ($YSifre!="") )
{
    $KontrolSorgusu = $con->prepare("SELECT * FROM yöneticiler WHERE KullaniciAdi = ? AND Sifre = ?");
    $KontrolSorgusu->execute([$YKullanici,$MD5sifre]);
    $Kullanicisayisi = $KontrolSorgusu ->rowCount();
    $KullaniciKaydi = $KontrolSorgusu ->fetch(PDO::FETCH_ASSOC);

    if($Kullanicisayisi>0){
        $_SESSION["Yönetici"] =$YKullanici;
        header("Location:YonetimPaneli.php?SKD=0");
        exit();

}else{
    header("Location:YonetimPaneli.php?SKD=3");
    exit();
          
}

}else{
    header("Location:YonetimPaneli.php?SKD=3");
    exit();
                

}















?>