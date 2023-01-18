<?php
unset($_SESSION["Yönetici"]);
session_destroy();
header("Location:YonetimPaneli.php");
exit();

?>