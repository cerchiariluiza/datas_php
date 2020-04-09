<html> <head> </head> <body>
<?php
setlocale(LC_TIME, 'pt_BR', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
$agora = getdate();

$ano = $agora["year"];
$mes = strftime('%B');
$dia = $agora["mday"];
$hora = $agora["hours"];
$minutos = $agora["minutes"];


echo $dia . " de " . $mes . " de " . $ano;
?>  
<br>
Hora atual: <?php echo $hora . ":" .  $minutos ?> 
<?php
if ($hora >= 0 and $hora < 6) {
    echo "Boa Madrugada!";
    }
elseif ($hora >= 6 and $hora < 12) {
    echo "Bom dia!";
    }
elseif ($hora >= 12 and $hora < 18) {
    echo "Boa tarde!";
    }
    else {
    echo "Boa noite";
    } 
?>
</body> </html>