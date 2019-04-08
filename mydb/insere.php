<?php
$conexao = mysqli_connect("localhost","root","","Aluno");

$sql = "INSERT INTO my_table (nome, quantidade, preco)
VALUES ('Dobradiça', 22, 15.00)";

	// Comando SQL executado 
	$query = mysqli_query($conexao,$sql) or die (mysql_error());

	if ($query) echo "registro adicionado com sucesso <br />";

	// Encerra conexão
	mysqli_close();

?>