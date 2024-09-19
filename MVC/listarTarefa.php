<?php 
    require_once 'vendor/autoload.php'; 
    use app\model\TarefaDao;
    use app\model\Tarefa;
    
    $tarefaDao = new TarefaDao();
    $tarefa = new Tarefa();
    
    $resultados = $tarefaDao->SelectId($tarefa);
    
    //var_dump($resultados);
    if (!empty($resultados)) {
        echo "<table border='1' style='width: 100%; text-align: left;'>";
        echo "<tr><th>Título</th> <th>Descrição</th> <th>Id</th> <th>Ação</th></tr>";
        
        foreach ($resultados as $r) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($r['titulo']) . "</td>";
            echo "<td>" . htmlspecialchars($r['descricao']) . "</td>";
            echo"<td>".htmlspecialchars($r['id']) ."</td>";
            
          
            echo "<td>";
            echo "<form action='newTarefa.php' method='POST' style='display: inline-block;'>";
            echo "<input type='hidden' name='_id' value='" . htmlspecialchars($r['id']) . "'>";
            echo "<input type='submit' value='Atualizar'>";
            echo "</form>";
            echo "</td>";
            
            echo "</tr>";
        
            //echo $r['id'];
        
        }
    
        echo "</table>";
    } else {
        echo"<script>alert('Nenhuma Tarefa encontrada!')</script>;";
        echo "<meta http-equiv='refresh' content='1;url=index.php'>";
    }





