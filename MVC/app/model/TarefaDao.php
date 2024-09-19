<?php
    
    namespace app\model;
    use Exception;

    Class TarefaDao{
        public function Insert(Tarefa $t){
            
            try{
                $titulo = $t->getTitulo();
                $descricao = $t->getDescricao();
                $status = 0;

                if($titulo && $descricao !=  null ){
                    $sql = "INSERT INTO task (titulo,descricao,status) VALUES (:titulo,:descricao,:status)";
                    $stmt = Conexao::getconn()->prepare($sql);

                    $stmt->bindParam(':titulo',$titulo);
                    $stmt->bindParam(':descricao',$descricao);
                    $stmt->bindParam(':status',$status);
                    $stmt->execute();
                    
                    echo"<script>alert('Cadastro Concluido')</script>;";
                    
                    //echo "<meta http-equiv='refresh' content='1;url=index.php'>";
                   
                }else{
                    echo"<script>alert('Não foi Possivel inserir')</script>;";
                
                }

            }catch(Exception $e){
                print($e);
                echo"<script>alert('Erro')</script>;";
            }
            
        }
    
        public function SelectId(Tarefa $t){

           try{
                $sql = "SELECT t.titulo, t.descricao, t.id FROM task t";
           
                $stmt = Conexao::getConn()->prepare($sql);
                $stmt->execute();
                $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                
                return $resultado;
        
                

        
            }catch(Exception $e){
                print($e);
                echo"<script>alert('Erro')</script>;";
            
            }
        }
        public function UpdateTask(Tarefa $t){
            try{
                $titulo = $t->getTitulo();
                $descricao = $t->getDescricao();
                $id =$t->getId();

                $sql = "UPDATE task SET titulo = :titulo, 
                                        descricao = :descricao WHERE id = :id";
                $stmt = Conexao::getConn()->prepare($sql);
            
                $stmt->bindParam(':titulo', $titulo);
                $stmt->bindParam(':descricao', $descricao);
                $stmt->bindParam(':id', $id);
                $stmt->execute();
                
                
            
            }catch(Exception $e){
                print($e);
                echo"<script>alert('Erro')</script>;";
            
            }
        }
    
  
    
    
    
    
    
    
    }