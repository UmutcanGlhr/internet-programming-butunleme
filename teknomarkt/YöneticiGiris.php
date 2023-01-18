<?php

if(empty($_SESSION["Yönetici"])){
?>
 <form action="YonetimPaneli.php?SKD=2" method="post">
<table width="1065" height="100%" align="center" border="0" cellpadding="0" cellspacing="0">
            <tr height="100%">
               
                        <td >
                            <input type="text" name="YKullanici" placeholder="Yönetici Adini Giriniz">
                        </td>
                        <td >
                            <input type="password" name="YSifre" placeholder="Sifre">
                        </td>
                        <td >
                            &nbsp;
                        </td>
                        <td >
                            <input type="submit" value="Giris Yap" >
                        </td>
              
            </tr>
    </table>
    </form>  
<?php
}

?>