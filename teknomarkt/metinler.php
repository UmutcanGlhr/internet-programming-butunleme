<?php

if(isset($_SESSION["Yönetici"])){
?>

<form action="YonetimPaneli.php?SKD=0&SKI=6" method="post">
    <table width ="760" height="90%"  >
        <tr height="100" valign="top">
            <td>
                    metinler ve sözleşmeler 
            </td>
            <tr valign="top" >
                    <td>
                        <table>
                            <tr>
                                <td>
                                     hakkimizda metni : 
                                </td>
                                <td>
                                <input type="text" name= "hakkimizdametni" value="<?php echo $hakkimizdametni; ?>">
                                </td>
                            </tr>
                               <tr>
                                <td>
                                     Uyelik sözlesmesi Metni : 
                                </td>
                                <td>
                                <input type="text" name= "üyeliksözlesmesimetni" value="<?php echo $üyeliksözlesmesimetni; ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                kullanimkosullari metni : 
                                </td>
                                <td>
                                <input type="text" name= "kullanimkosullarimetni" value="<?php echo $kullanimkosullarimetni; ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                gizlilik sözlesmesi metni : 
                                </td>
                                <td>
                                <input type="text" name= "gizliliksözlesmesimetni" value="<?php echo $gizliliksözlesmesimetni; ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                mesafeli satis sözlesmesi metni : 
                                </td>
                                <td>
                                <input type="text" name= "mesafelisatissözlesmesimetni" value="<?php echo $mesafelisatissözlesmesimetni; ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                teslimat metni : 
                                </td>
                                <td>
                                <input type="text" name= "teslimatmetni" value="<?php echo $teslimatmetni; ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                iptal iade degisim metni : 
                                </td>
                                <td>
                                <input type="text" name= "iptaliadedegisimmetni" value="<?php echo $iptaliadedegisimmetni; ?>">
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