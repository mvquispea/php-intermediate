<?php 

setcookie("Cart", "", time()-3600, '/'); 
header("Location: thanks.php");
exit();