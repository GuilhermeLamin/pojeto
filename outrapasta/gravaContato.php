<?php

  include("cabecalho.php");


    $dados = file("agenda.csv");
    foreach ($$dados as $linha) {
    	$colunas = explode(";", $linha);
    	$ultimo = $colunas[0];
    }

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $foto = $_POST['foto'];



    $linha = $codigo.";".$nome.";".$telefone.";".$email.";".$foto;

    print($linha);


     $arquivo = fopen("agenda.csv","a+");


     fwrite($arquivo, "\n".$linha);


     fclose($arquivo);

  include("rodape.php");
?>