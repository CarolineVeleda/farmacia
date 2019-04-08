<?php
$conexao = mysqli_connect("localhost","root","","Aluno");

$query = "SELECT nome,quantidade,preco FROM my_table ORDER BY nome";

$resultado = mysqli_query($conexao,$query);
?>
<table border="1"><tr>
	<td><b>Nome</b></td>
	<td><b>Quantidade</b></td>
    <td><b>Preço</b></td>
</tr>

<?php


while($linha = mysqli_fetch_array($resultado)){
    echo "<tr><td>".$linha['nome']."</td><td>".$linha['quantidade']."</td><td>".$linha['preco']."</td></tr><br />";
}

mysqli_close($conexao);

?>