<html> <head> </head> <body>
<?php

$data1 = new DateTime('2018-10-20');
$data2 = new DateTime('2018-10-19');
$intervalo = $data1 ->diff($data2);
?>

<pre>
<?php print_r($intervalo)?>	
</pre> 
<p style="color:#B000FF;"> Resultados </p>
<pre>
<?php print_r($intervalo->format('%r%d'))?> dia(s) de diferença<br>
<?php print_r($intervalo->format('%y'))?> ano(s) de diferença<br>
</pre> 

</body> </html>