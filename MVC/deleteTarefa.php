<?php
    
    require_once 'vendor/autoload.php'; 
    use app\model\TarefaDao;
    use app\model\Tarefa;
    
    
    if($_SERVER["REQUEST_METHOD"] == "POST" ){
        
        try{
            $id = htmlspecialchars($_POST['_id']);
           // echo $id;

            $tarefa = new Tarefa();
            $tarefa->setId($id);

            $tarefaDao = new TarefaDao();

            $tarefaDao->DeleteConsulta($tarefa);

            echo"<script>alert('Deletado')</script>;";
            echo "<meta http-equiv='refresh' content='1;url=index.php'>";

        }catch(Exception $e){
            echo "Erro";
        }
    
    
    }

