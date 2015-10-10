<?php
   
include '../DAO/Usuario.php';
ini_set('display_errors', '1');

class ControllerUsuario
{
     function cadastrar($senha,$tipo,$login,$nome)
     {
        $criptografia = md5($senha);
        
        $DAOUsuario = new Usuario();
        
        return $DAOUsuario->cadastrar($criptografia, $tipo, $login, $nome);
     }
     
     function listar()
     {
        $DAOUsuario = new Usuario();
        return $DAOUsuario->listar();
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
 
            return 1;
             
        }else{
            
            return 0;
      
        }
     }
     
     function consultarID($idUsuario)
     {
        $DAOUsuario = new Usuario();
        return $DAOUsuario->consultarID($idUsuario);
     }
     
     function alterar($tipo,$nome,$login,$idUsuario)
     {
        $DAOUsuario = new Usuario();
        return $DAOUsuario->alterar($tipo,$nome,$login,$idUsuario);
     }
     
     function excluir($idUsuario)
     {
        $DAOUsuario = new Usuario();
        return $DAOUsuario->excluir($idUsuario);
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