<?php

if(isset($_SESSION["Yönetici"])){
?>
 <table width="1065" height="100%" align="center" border="0" cellpadding="0" cellspacing="0">
    
            <tr height="100%">
            
                <td width="300" align="center" bgcolor="#001d26"  >
                <table width="300" height="100%" align="center" border="0" cellpadding="0" cellspacing="0">

                        <tr height="70">
                            <td align="center">
                                <a href="YonetimPaneli.php?SKD=0&SKI=0">Pano</a>
                            </td>
                        </tr>
                        <tr height="70">
                            <td align="center">
                                <a href="YonetimPaneli.php?SKD=0&SKI=1">Site Ayarlari</a>
                            </td>
                        </tr>
                        <tr height="70">
                            <td align="center">
                                <a href="YonetimPaneli.php?SKD=0&SKI=5">Sözlesmeler ve Metinler</a>
                            </td>
                        </tr>
                        <tr height="50" >
                    <td align="center" >
                             <a href="YonetimPaneli.php?SKD=4">Cikis Yap</a>
                    </td>
                            </tr>
                </table>
                </td>
                <td   width="5" align="center">&nbsp;</td>
                <td   width="760" align="center"> 
                  <?php
                          if(!$SayfaKoduDegeriIC or ($SayfaKoduDegeriIC=="") or($SayfaKoduDegeriIC=="0") ){
                            include($SayfaIc[0]);
                        }else{
                            include($SayfaIc[$SayfaKoduDegeriIC]);
                        }

                    ?>
                </td>
             </tr>
 </table>





<?php
}else{
    header("Location:YonetimPaneli.php?SKD=1");
    exit();
}
?>