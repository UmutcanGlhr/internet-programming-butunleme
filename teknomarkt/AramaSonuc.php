<?php
 if(isset($_POST["aramasorgusu"])){
    $aramasorgusu = guvenlik($_POST["aramasorgusu"]);
}else{
    $aramasorgusu ="";
} 

$AramaSorgusu = $con->prepare("SELECT * FROM urunler WHERE UrunAdi LIKE '%".$aramasorgusu."%' ");
$AramaSorgusu->execute();
$AramaKontrolSayisi = $AramaSorgusu ->rowCount();
$UrunKayitlari = $AramaSorgusu->fetchAll(PDO::FETCH_ASSOC);
if($AramaKontrolSayisi >0 ){
    foreach($UrunKayitlari as $Kayit){
?>   

<table align="center" border="0" cellpadding="0" cellspacing="0" style="border:1px solid black; margin-bottom:10px;">
            <tr height = "40" >
       <td  align="center"> <a href="index.php?SK=38&ID=<?php echo $Kayit["id"]; ?>"><img src="Resimler/Buzdolabi/<?php echo $Kayit["UrunResmiBir"]; ?>" border="0" width="190" height="160"></a></td>
                 <tr height="26">
                             <td width = "253" align="center"><a style="text-decoration: none; color:black; font-size:large; font-family:Arial, Helvetica, sans-serif;" href="index.php?SK=38&ID=<?php echo $Kayit["id"]; ?>"><?php echo $Kayit["UrunAdi"]; ?></a></td>
                         </tr>
                       <tr height="26">
                        <td width = "253" align="center"><a style="text-decoration: none; color:black; font-size:large; font-family:Arial, Helvetica, sans-serif;" href="index.php?SK=38&ID=<?php echo $Kayit["id"]; ?>"><?php echo $Kayit["UrunAciklamasi"]; ?></a></td>
                         </tr>



                          <tr height="26">
                    <td width = "253" align="center"><a style="text-decoration: none; color:black; font-size:large; font-family:Arial, Helvetica, sans-serif;" href="index.php?SK=38&ID=<?php echo $Kayit["id"]; ?>"><?php echo $Kayit["UrunFiyati"]; ?> TL</a></td>
                          </tr>
                    </tr>
                                    </table>

<?php
    }
}else{
    echo "arama bulunmadi.";
}

?>