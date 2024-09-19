<?php
      require_once 'vendor/autoload.php'; 
      use app\model\TarefaDao;
      use app\model\Tarefa;
       
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $id = htmlspecialchars($_POST['_id']);
        $titulo = htmlspecialchars($_POST['_titulo']);
        $descricao = htmlspecialchars($_POST['_descricao']);
    
        $tarefa = new Tarefa();
        $tarefa ->setId($id);
        $tarefa->setTitulo($titulo);
        $tarefa->setDescricao($descricao);
    
        $tarefaDao = new TarefaDao;
    
        $tarefaDao->UpdateTask($tarefa);
        
        echo"<script>alert('Update Concluido')</script>;";
        echo "<meta http-equiv='refresh' content='1;url=index.php'>";
       
        // echo $id;
        //echo "</br>";
        //echo $titulo;
        //echo "</br>";
        //echo $descricao;
        
        
        
      
    }
    