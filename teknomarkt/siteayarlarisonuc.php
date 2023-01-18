<?php

if(isset($_SESSION["Yönetici"])){

    if(isset($_POST["SiteAdi"])){
        $SiteAdi = guvenlik($_POST["SiteAdi"]);
    }else{
        $SiteAdi ="";
    } 
    if(isset($_POST["SiteTitle"])){
        $SiteTitle = guvenlik($_POST["SiteTitle"]);
    }else{
        $SiteTitle ="";
    } 
    if(isset($_POST["SiteDescription"])){
        $SiteDescription = guvenlik($_POST["SiteDescription"]);
    }else{
        $SiteDescription ="";
    } 
    if(isset($_POST["SiteKeywords"])){
        $SiteKeywords = guvenlik($_POST["SiteKeywords"]);
    }else{
        $SiteKeywords ="";
    } 
    if(isset($_POST["SiteCopyrightMetni"])){
        $SiteCopyrightMetni = guvenlik($_POST["SiteCopyrightMetni"]);
    }else{
        $SiteCopyrightMetni ="";
    } 
    if(isset($_POST["SiteEmailAdresi"])){
        $SiteEmailAdresi = guvenlik($_POST["SiteEmailAdresi"]);
    }else{
        $SiteEmailAdresi ="";
    } 
    if(isset($_POST["SiteEmailSifresi"])){
        $SiteEmailSifresi = guvenlik($_POST["SiteEmailSifresi"]);
    }else{
        $SiteEmailSifresi ="";
    } 
    if(isset($_POST["SiteLinki"])){
        $SiteLinki = guvenlik($_POST["SiteLinki"]);
    }else{
        $SiteLinki ="";
    } 
    
    if(($SiteAdi!="") and($SiteTitle!="") and ($SiteDescription!="") and ($SiteKeywords!="") and ($SiteCopyrightMetni!="") and ($SiteEmailAdresi!="") and 
    ($SiteEmailSifresi!="") and ($SiteLinki!="")  ){


        
        $ayarlariGuncelle = $con->prepare("UPDATE ayarlar SET  SiteAdi =?,SiteTitle =?,SiteDescription =?,SiteKeywords =?,SiteCopyrightMetni=?,SiteEmailAdresi =?,SiteEmailSifresi =?,SiteLinki =?");
        $ayarlariGuncelle->execute([$SiteAdi,$SiteTitle,$SiteDescription,$SiteKeywords,$SiteCopyrightMetni,$SiteEmailAdresi,$SiteEmailSifresi,$SiteLinki]);
        $GuncellemeKontrolSayisi = $ayarlariGuncelle ->rowCount();
      
        if($GuncellemeKontrolSayisi>0){







            header("Location:YonetimPaneli.php?SKD=0&SKI=3");
            exit();
        }else{
            header("Location:YonetimPaneli.php?SKD=0&SKI=4");
            exit();
        }







    }else{
        header("Location:YonetimPaneli.php?SKD=0&SKI=4");
        exit();
    }

}else{
    header("Location:YonetimPaneli.php?SKD=1");
    exit();
}
?>