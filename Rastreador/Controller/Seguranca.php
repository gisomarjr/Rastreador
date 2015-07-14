<?php
ini_set('display_errors', '1');

class Seguranca
{
   
    static function verificaLogado(){
        session_start();
        
        $id   = $_SESSION['id'];
        $nome = $_SESSION['nome'];
        $tipo = $_SESSION['tipo'];
        
        if(!$id and !$nome and !$tipo){
            header("Location: /index.php");
        }
              
        
    }
    
    static function sair(){
        
        session_destroy();
        header("Location: /index.php");  
    }
    
}

