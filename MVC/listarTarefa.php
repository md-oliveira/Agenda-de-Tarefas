<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>
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
            flex-direction: column;
            height: 100vh;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #34495e;
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        table {
            width: 80%;
            max-width: 900px;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #16a085;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        input[type="submit"] {
            padding: 8px 12px;
            background-color: #16a085;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #1abc9c;
        }

        .btn {
            text-decoration: none;
            padding: 10px 20px;
            background-color: #16a085;
            color: white;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #1abc9c;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
        }

        a {
            text-decoration: none;
            color: #16a085;
            font-weight: bold;
        }

        a:hover {
            color: #1abc9c;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Lista de Tarefas</h1>

        <?php 
            require_once 'vendor/autoload.php'; 
            use app\model\TarefaDao;
            use app\model\Tarefa;

            $tarefaDao = new TarefaDao();
            $tarefa = new Tarefa();

            $resultados = $tarefaDao->SelectId($tarefa);

            if (!empty($resultados)) {
                echo "<table>";
                echo "<tr><th>Título</th> <th>Descrição</th> <th>Id</th> <th>Ação</th> <th>Ação</th> </tr>";
                
                foreach ($resultados as $r) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($r['titulo']) . "</td>";
                    echo "<td>" . htmlspecialchars($r['descricao']) . "</td>";
                    echo "<td>" . htmlspecialchars($r['id']) . "</td>";
                    
                    echo "<td>";
                    echo "<form action='newTarefa.php' method='POST' style='display: inline-block;'>";
                    echo "<input type='hidden' name='_id' value='" . htmlspecialchars($r['id']) . "'>";
                    echo "<input type='submit' value='Atualizar'>";
                    echo "</form>";
                    echo "</td>";
                    
                    echo "<td>";
                    echo "<form action='deleteTarefa.php' method='POST' style='display: inline-block;'>";
                    echo "<input type='hidden' name='_id' value='" . htmlspecialchars($r['id']) . "'>";
                    echo "<input type='submit' value='Deletar'>";
                    echo "</form>";
                    echo "</td>";
                    
                    echo "</tr>";
                }

                echo "</table>";
                echo "<br><br>";
                echo "<a href='index.php' class='btn'>Voltar</a>";
            } else {
                echo "<script>alert('Nenhuma Tarefa encontrada!')</script>;";
                echo "<meta http-equiv='refresh' content='1;url=index.php'>";
            }
        ?>
    </div>

</body>
</html>
