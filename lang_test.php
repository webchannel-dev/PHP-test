<?php

include ('include/lang.php');
$default=(empty($_GET['lang']))?'en':$_GET['lang'];

echo $lang[$default]['hello'].','.$lang[$default]['my_name'];

?>