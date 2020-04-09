<?php

$a = checkdate(2, 20, 2019);
if ($a){
	echo 'Data válida';
}else {
	echo 'Data inválida';
}