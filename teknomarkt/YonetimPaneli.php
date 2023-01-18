<?php

session_start();
ob_start();


require_once("Ayarlar/ayar.php");
require_once("Ayarlar/fonksiyonlar.php");
require_once("Ayarlar/sitesayfalari.php");
require_once("Ayarlar/yönetimsayfalaridis.php");
require_once("Ayarlar/yönetimsayfalariic.php");
if(isset($_REQUEST["SKI"])){
    $SayfaKoduDegeriIC = SayiliIcerikleriFiltrele($_REQUEST["SKI"]);
}else{
    $SayfaKoduDegeriIC = 0;
}


if(isset($_REQUEST["SKD"])){
    $SayfaKoduDegeriDis = SayiliIcerikleriFiltrele($_REQUEST["SKD"]);
}else{
    $SayfaKoduDegeriDis = 0;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Robots" content="noindex, nofollow , noarchive">
    <meta name="googlebot" content="noindex, nofollow , noarchive">
    <meta name="revisit-after" content="7 Days">
    <title><?php echo donuşumlerigeridondur($SiteTitle); ?></title>

    <script type="text/javascript" src="Frameworks/JQUERY/jquery-3.6.3.min.js" lang="javascript"></script>  
    <link type="text/css" rel="stylesheet" href="Ayarlar/stil.css">
    <script type="text/javascript" src="Ayarlar/fonksiyonlar.js" lang="javascript"></script>
</head>
<body>
        <table width="1065" height="100%" align="center" border="0" cellpadding="0" cellspacing="0">
            <tr height="100%">
                <td align="center">

                <?php 
                    if(empty($_SESSION["Yönetici"])){
                            if(!$SayfaKoduDegeriDis or ($SayfaKoduDegeriDis=="") or($SayfaKoduDegeriDis=="0") ){
                                include($SayfaDis[1]);
                            }else{
                                include($SayfaDis[$SayfaKoduDegeriDis]);
                            }

                    }else{

                        if(!$SayfaKoduDegeriDis or ($SayfaKoduDegeriDis=="") or($SayfaKoduDegeriDis=="0") ){
                            include($SayfaDis[0]);
                        }else{
                            include($SayfaDis[$SayfaKoduDegeriDis]);
                        }

                    }

                ?>







            </td>
        </tr>
    </table>









    
</body>
</html>



<?php

$con = null;
ob_end_flush();

?>