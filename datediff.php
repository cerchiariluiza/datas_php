<html> <head> </head> <body>
<?php


$data1 = new DateTime('2018-10-20');
$data2 = new DateTime('2019-10-22');
$intervalo = $data1 ->diff($data2);
?>

<pre>
<?php print_r($intervalo)?>	
</pre> 
</body> </html>