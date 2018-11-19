<?php 


$gmtDate = gmdate("D, d M Y H:i:s"); 
header("Expires: {$gmtDate} GMT"); 
header("Last-Modified: {$gmtDate} GMT"); 
header("Cache-Control: no-cache, must-revalidate"); 
header("Pragma: no-cache"); 
/* Os readers acima dizem para nao usar o cache do browser! */ 

$n = $_GET["n"]; //pegar a variavei enviada 

// vamos multiplicar essa variavel por 50 

$n *= 50; 

echo $n; // agora vamos "retornar" o valor, para isso escrevemos ele em tela 

    $_lista = "";
    //leen .txt
    $arquivo = fopen("C:/xampp/htdocs/SuiteCRM-7.8.20/MASIP/newfile.txt", "r") or die("Unable to open file!");
    // Lê o conteúdo do arquivo
    while(!feof($arquivo))
    {
        //Mostra uma linha do arquivo
        $_lista = fgets($arquivo, 1024);
    }
    // Fecha arquivo aberto
    fclose($arquivo);
    $_lista = str_replace("\"", '' , $_lista);
    $array = explode(';', $_lista);


?>