<?php

include_once("remedio.php");

$m = new Remedio($_POST['nome'],$_POST['fabricante'],$_POST['controlado'],intval($_POST['quantidade']),intval($_POST['preco']));

var_dump($m);

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

    <h2>Cadastrar Medicamentos</h2>
    <br>
    <br>

        <form action="" method="post">

            <label for="">Digite o nome do medicamento</label>
            <input name="nome" type="text">

            <br>

            <label for="">Digite o nome do fabricante</label>
            <input name="fabricante" type="text">
            <br>
            <label for="">O medicamento é controlado?</label>
            <select name="controlado">
                <option value="sim">Sim</option>
                <option value="não">Não</option>
            </select>
            <br>
            <label for="">Digite a quantidade</label>
            <input name="quantidade" type="number">
            <br>
            <label for="">Digite o preco</label>
            <input name="preco" type="number">
            <br>
            <input type="submit">

        </form>

        
    </body>
    </html>