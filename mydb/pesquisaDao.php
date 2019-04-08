<?php

include("Database.php");

$db = new Database("localhost","root","","Aluno");
// $db->selectDB("myDB");

$query = "SELECT nome,quantidade,preco FROM my_table ORDER BY nome";
$resultado = $db->query($query);

 
?>
<table border="1"><tr>
	<td><b>Nome</b></td>
	<td><b>Quantidade</b></td>
    <td><b>Preço</b></td>
</tr>

<?php


while($linha = $db->fetch($resultado)){
    echo "<tr><td>".$linha['nome']."</td><td>".$linha['quantidade']."</td><td>".$linha['preco']."</td></tr><br />";
}

mysqli_close($db->con);

?>