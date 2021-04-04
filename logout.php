<?php
session_start();
session_destroy();
setcookie('user', "", time()-3600);  //apagar cookie

header("location: index.php");


?>