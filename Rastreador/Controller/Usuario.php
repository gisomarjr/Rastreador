<?php
   
include '../DAO/Usuario.php';
ini_set('display_errors', '1');

class ControllerUsuario
{
     function cadastrar($senha,$tipo,$login,$nome)
     {
        $criptografia = md5($senha);
        
        $DAOUsuario = new Usuario();
        $DAOUsuario->cadastrar($criptografia, $tipo, $login, $nome);
     }

     function login($senha, $tipo, $login) 
     {
        session_start(); 
        
        $dados = array();
        
        $criptografia = md5($senha);
        
        $DAOUsuario = new Usuario();
        $dados = $DAOUsuario->login($criptografia, $tipo, $login);
        
        if(count($dados) > 0){
            
            $_SESSION['id']   = $dados['id'];
            $_SESSION['nome'] = $dados['nome'];
            $_SESSION['tipo'] = $dados['tipo'];

            // header("Location: /View/interno.php");  
            return 1;
             
        }else{
            
            return 0;
            
           // header("Location: /index.php"); 
           
        }
     }
     
     /**
      * Retorna o tipo do usuario
      * @param int $idTipoUsuario
      * 
      * --administrador
      * --vendedor
      * --analista
      */
     static function verificaPerfil($idTipoUsuario){
         
         switch ($idTipoUsuario){
             
             case 1:
                 return "Administrador";
             case 2:
                 return "Vendedor";
             case 3:
                 return "Analista";
                 
         }
         
     }

}