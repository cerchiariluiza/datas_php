<html> <head> </head> <body>
<?php
$hora = date("H");

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