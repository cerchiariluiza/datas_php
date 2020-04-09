<html> <head> </head> <body>
<?php
$agora = getdate();

$ano = $agora["year"];
$mes = $agora["mon"];
$mesN = $agora["month"];
$dia = $agora["mday"];
$hora = $agora["hours"];
$minutos = $agora["minutes"];

echo $dia . "/" . $mes . "/" . $ano . "<br>";
echo $dia . "de " . $mesN . "de" . $ano;
?>  
<br>
Hora atual: <?php echo $hora . ":" .  $minutos ?> 
</body> </html>