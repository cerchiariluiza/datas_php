<?php
echo 'Data: ';
$d = date('d/m/Y');
echo $d;
echo '<br>';



$d = date('d/m/Y ||| H:i:s', mktime (03,15,00,10,23,1981));
echo $d;


?>