<?php 

$gmtDate = gmdate("D, d M Y H:i:s"); 
header("Expires: {$gmtDate} GMT"); 
header("Last-Modified: {$gmtDate} GMT"); 
header("Cache-Control: no-cache, must-revalidate"); 
header("Pragma: no-cache"); 
/* Os readers acima dizem para nao usar o cache do browser! */ 

$n = $_GET["n"]; //pegar a variavei enviada 

// vamos multiplicar essa variavel por 50 

$fp = fopen("/var/www/html/SuiteCRM-7.8.20/masip/variaveis.txt", "w") or die("Unable to open file!");

fputs($fp, $n);

fclose($fp);

$n *= 50; 

echo $n; // agora vamos "retornar" o valor, para isso escrevemos ele em tela 

?> 