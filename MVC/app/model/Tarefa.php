<?php
    
    namespace app\model;
    class Tarefa{
        private $titulo,$descricao,$id;
    
        public function getDescricao(){
            return $this->descricao;
        }

        public function setDescricao($descricao){
            $this->descricao = $descricao;
        }


        public function getTitulo(){
            return $this->titulo;
        }
            
        public function setTitulo($titulo){
            $this->titulo = $titulo;
        }
        
        public function getId(){
            return $this->id;
        }
            
        public function setId($id){
            $this->id = $id;
        }




    }















//descricao
//status
