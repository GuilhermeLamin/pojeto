<?php

	$texto = $_POST['nome'].$_POST['telefone'].$_POST['email'].$_POST['foto']
	print($texto);
/*
	$texto = "\nteste";

	$arquivo = fopen("agenda.csv", "a+");

	fwrite($arquivo, $texto);

	fclose($arquivo);