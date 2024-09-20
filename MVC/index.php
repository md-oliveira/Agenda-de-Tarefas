<?php
    require_once 'vendor/autoload.php';
    
    use app\model\Tarefa;
    use app\model\TarefaDao;
    
    if($_SERVER["REQUEST_METHOD"] = "POST" ){
       
        if (isset($_POST['_titulo']) && isset($_POST['_descricao'])){
            $titulo = htmlspecialchars($_POST['_titulo']);
            $descricao = htmlspecialchars($_POST['_descricao']);
        
            //echo $titulo, $descricao;
        
            $tarefa = new Tarefa();
            $tarefa->setDescricao($descricao);
            $tarefa ->setTitulo($titulo);

            $tarefaDao = new TarefaDao();
            $tarefaDao->insert($tarefa);
        

        }
        
        /* if($descricao  != null);{
            echo"sucesso";
        }
        if($descricao  = null);{
            echo"ERRO";
        }*/
    
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f4f8;
            color: #2c3e50;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            text-align: center;
        }

        h1 {
            color: #34495e;
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .card {
            background-color: #fff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            transition: box-shadow 0.3s ease;
            margin: 0 auto;
        }

        .card:hover {
            box-shadow: 0px 15px 40px rgba(0, 0, 0, 0.2);
        }

        h2 {
            font-size: 20px;
            color: #16a085;
            margin-bottom: 20px;
        }

        input[type="text"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus {
            border-color: #16a085;
            outline: none;
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #16a085;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #1abc9c;
        }

        a {
            display: block;
            margin-top: 20px;
            color: #16a085;
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #1abc9c;
        }

    </style>
<body>
    <div class="container">
        <h1>BEM VINDO AO SEU GERENCIADOR DE TAREFAS!</h1>

        <form action="" method="POST">
            <h2>Coloque aqui a descrição da sua tarefa!</h2>
            <input type="text" required placeholder="TITULO" name="_titulo">
            <input type="text" required placeholder="DESCRIÇÃO" name="_descricao">
            <input type="submit" value="Adicionar Tarefa">
        </form>

        <br>
        <a href="listarTarefa.php">Lista de Tarefas</a>
    </div>
</body>
</html>