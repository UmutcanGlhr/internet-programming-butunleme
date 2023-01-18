<?php

if(isset($_SESSION["Yönetici"])){
?>

<form action="YonetimPaneli.php?SKD=0&SKI=2" method="post">
<table width ="760" height="90%" >
    <tr height="100" valign="top" >
        <td>
            SiteAyarlari
        </td>
        <tr valign="top" >
            <td>
                <table width ="750">

                    <tr>
                        <td>
                            Site adi:
                        </td>
                        <td>
                            <input type="text" name= "SiteAdi" value="<?php echo $SiteAdi; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Site Title:
                        </td>
                        <td>
                            <input type="text" name= "SiteTitle" value="<?php echo $SiteTitle; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            SiteDescription:
                        </td>
                        <td>
                            <input type="text" name= "SiteDescription" value="<?php echo $SiteDescription; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            SiteKeywords:
                        </td>
                        <td>
                            <input type="text" name= "SiteKeywords" value="<?php echo $SiteKeywords; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                        SiteCopyrightMetni	:
                        </td>
                        <td>
                            <input type="text" name= "SiteCopyrightMetni" value="<?php echo $SiteCopyrightMetni	; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                        SiteEmailAdresi	:
                        </td>
                        <td>
                            <input type="text" name= "SiteEmailAdresi" value="<?php echo $SiteEmailAdresi; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                        SiteEmailSifresi	:
                        </td>
                        <td>
                            <input type="text" name= "SiteEmailSifresi" value="<?php echo $SiteEmailSifresi; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                        SiteLinki	:
                        </td>
                        <td>
                            <input type="text" name= "SiteLinki" value="<?php echo $SiteLinki; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                        
                        </td>
                        <td>
                            <input type="submit" value="Ayarlari Kaydet">
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </tr>


</table>
</form>







<?php
}else{
    header("Location:YonetimPaneli.php?SKD=1");
    exit();
}
?>