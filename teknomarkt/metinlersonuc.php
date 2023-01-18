<?php

if(isset($_SESSION["Yönetici"])){

    if(isset($_POST["hakkimizdametni"])){
        $hakkimizdametni = guvenlik($_POST["hakkimizdametni"]);
    }else{
        $hakkimizdametni ="";
    } 
    if(isset($_POST["üyeliksözlesmesimetni"])){
        $üyeliksözlesmesimetni = guvenlik($_POST["üyeliksözlesmesimetni"]);
    }else{
        $üyeliksözlesmesimetni ="";
    } 
    if(isset($_POST["kullanimkosullarimetni"])){
        $kullanimkosullarimetni = guvenlik($_POST["kullanimkosullarimetni"]);
    }else{
        $kullanimkosullarimetni ="";
    } 
    if(isset($_POST["gizliliksözlesmesimetni"])){
        $gizliliksözlesmesimetni = guvenlik($_POST["gizliliksözlesmesimetni"]);
    }else{
        $gizliliksözlesmesimetni ="";
    } 
    if(isset($_POST["mesafelisatissözlesmesimetni"])){
        $mesafelisatissözlesmesimetni = guvenlik($_POST["mesafelisatissözlesmesimetni"]);
    }else{
        $mesafelisatissözlesmesimetni ="";
    } 
    if(isset($_POST["teslimatmetni"])){
        $teslimatmetni = guvenlik($_POST["teslimatmetni"]);
    }else{
        $teslimatmetni ="";
    } 
    if(isset($_POST["iptaliadedegisimmetni"])){
        $iptaliadedegisimmetni = guvenlik($_POST["iptaliadedegisimmetni"]);
    }else{
        $iptaliadedegisimmetni ="";
    } 
  
    
    if(($hakkimizdametni!="") and($üyeliksözlesmesimetni!="") and ($kullanimkosullarimetni!="") and ($gizliliksözlesmesimetni!="") and ($mesafelisatissözlesmesimetni!="") and ($teslimatmetni!="") and 
    ($iptaliadedegisimmetni!="")){


        
        $ayarlariGuncelle = $con->prepare("UPDATE sozlesmelervemetinler SET  hakkimizdametni =?,üyeliksözlesmesimetni =?,kullanimkosullarimetni =?,gizliliksözlesmesimetni =?,mesafelisatissözlesmesimetni=?,teslimatmetni =?,iptaliadedegisimmetni =?");
        $ayarlariGuncelle->execute([$hakkimizdametni,$üyeliksözlesmesimetni,$kullanimkosullarimetni,$gizliliksözlesmesimetni,$mesafelisatissözlesmesimetni,$teslimatmetni,$iptaliadedegisimmetni]);
        $GuncellemeKontrolSayisi = $ayarlariGuncelle ->rowCount();
      
        if($GuncellemeKontrolSayisi>0){

                echo "Güncellendi.";





            
        }else{
            echo "bilgi değişikliği yapilmadi";
        }







    }else{
        echo "Eksik veya Hatali giriş.";
    }

}else{
    header("Location:YonetimPaneli.php?SKD=1");
    exit();
}
?>