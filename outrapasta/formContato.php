<?php
 include("cabecalho.php");

 ?>


     <form method="post" action="gravaContato.php">
     	<label for="nome">Nome:</label>
     	<input type="text" name="nome"><br>


        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone"><br>

        <label for="email">email:</label>
        <input type="text" name="email"><br>

        <label for="foto">Foto:</label>
        <input type="text" name="foto"><br>

        <input type="submit" name="Enviar">

     </form>

     <?php

     include("rodape.php")

     ?>