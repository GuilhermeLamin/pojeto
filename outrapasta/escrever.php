<?php


//abrir o arquivo em modo de escrita

$arquivo=fobpen("exemplo.txt","a+");
// escrever o texto no arquivo

fwrite($arquivo, "\nola mundo");


//fechar o arquivo,para salva-lo
fclose($arquivo);