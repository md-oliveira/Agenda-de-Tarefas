<?php
    require_once 'vendor/autoload.php';
    
    if($_SERVER["METHOD_REQUEST"] = "POST" ){
        $titulo = htmlspecialchars('_titulo');
        $descricao = htmlspecialchars('_descricao');
    
        //echo $titulo, $descricao;
    
        $tarefa = new Tarefa();
        $tarefa ->getDescricao($titulo);
    
    
    
    }



    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>BEM VINDO AO SEU GERENCIADOR DE TAREFAS!!</h1>

    <form action="" method="POST">
        <h2>
            Coloque aqui a descrição da sua tarefa!
        </h2>
        <input type="text" required placeholder="TITULO" name="_titulo">
        <br>
        <br>
        <input type="text" required placeholder="DESCRICAO" name="_descricao">
        <br>
        <br>
        <input type="submit">
    </form>



</body>
</html>