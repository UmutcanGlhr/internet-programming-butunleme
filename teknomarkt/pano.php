<?php

if(isset($_SESSION["Yönetici"])){
?>




Dashboard











<?php
}else{
    header("Location:YonetimPaneli.php?SKD=1");
    exit();
}
?>