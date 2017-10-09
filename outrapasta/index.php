<?php
	//FUNCAO que abre um arquivo e retorna o seu conteúdo como uma STRING - file_get_contents()
	$cabecalho = file_get_contents("cabecalho.php");
	print($cabecalho);
?>

	<section id="meio">
		<p>Dados trazidos do CSV</p>
  <a href="formContato.php">Inserir novo contato</a>
<table border='1'>	
<?php
	//FUNCAO que abre um arquivo e retorna o seu conteúdo como um ARRAY - file() -
	//cada posicao equivale a uma linha do arquivo
	$dados = file("agenda.csv");

$cont=0;
foreach($dados as $posicao=>$linha){
	if($posicao==0){//primeira linha
		echo('<tr class="titulo">');
		$colunas = explode(";", $linha);
		echo('<th>'.$colunas[1].'</th>');
		echo('<th>'.$colunas[3].'</th>');
		echo('</tr>');
	}else{
		$cont++;
		if(($posicao%2)==0){//par
			$cor = 'corPar';
		}else{//impar
			$cor = 'corImpar';
		}
		echo('<tr class="'.$cor.'">');
		$colunas = explode(";", $linha);

echo('<td>
<a href="contato.php?codigo='.$colunas[0].'">'.$colunas[1].'</a>
	</td>');

		echo('<td>'.$colunas[3].'</td>');
		echo('</tr>');
	}
}

?>		
<tr><td colspan="2"><?=$cont ?> contato(s) listado(s)</td></tr>
</table>











	</section>

<?php
	$rodape = file_get_contents("rodape.php");
	print($rodape);
?>
