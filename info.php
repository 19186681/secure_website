<?php
 echo  str_replace('\\', '', dirname(htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES)));
 //echo date("l jS \of F Y h:i:s A");
?>

