<?php
   
include '../DAO/Usuario.php';
ini_set('display_errors', '1');

class ControllerUsuario
{
     function cadastrar($senha,$tipo,$login,$nome)
     {
        $DAOUsuario = new Usuario();
        $DAOUsuario->cadastrar($senha, $tipo, $login, $nome);
     }

     function login($senha, $tipo, $login) 
     {
        session_start(); 
        
        $dados = array();
        
        $DAOUsuario = new Usuario();
        $dados = $DAOUsuario->login($senha, $tipo, $login);
        
        if(count($dados) > 0){
            
            $_SESSION['id']   = $dados['id'];
            $_SESSION['nome'] = $dados['nome'];
            $_SESSION['tipo'] = $dados['tipo'];

             header("Location: /View/Cliente/interno.php");  
        
             
        }else{
            
            header("Location: /index.php"); 
           
        }
     }

}