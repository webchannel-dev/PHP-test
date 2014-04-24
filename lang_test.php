<?php
// This is only for test propose to check out translate process is working fine or not . 

//Adding keyword array information 
include ('include/lang.php');

//Check get param , if there is not param the default langauge will set to English 
$default=(empty($_GET['lang']))?'en':$_GET['lang'];

// Final step is to get the related translat from the selected language by exact keyword . 
echo $lang[$default]['hello'].','.$lang[$default]['my_name'];
?>