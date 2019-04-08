<?php

// include("");

/*
while($linha = $db->fetch($resultado)){
    echo "<tr><td>".$linha['nome']."</td><td>".$linha['quantidade']."</td><td>".$linha['preco']."</td></tr><br />";
}

mysqli_close($db->con);
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h2>Pesquisar Medicamentos pelo nome</h2>
    <br>
    <br>
    
    <form action="" method="post">

            <label for="">Digite o nome do medicamento</label>
            <input name="nome" type="text">

            <br>

            <button type="submit">Pesquisar</button>
            

    </form>

<br>
<br>
<br>
<br>

<table border="1"><tr>
    <td><b>Cod</b></td>
    <td><b>Nome</b></td>
    <td><b>Fabricante</b></td>
	<td><b>Quantidade</b></td>
    <td><b>Preço</b></td>
</tr>


</body>
</html>