<?php

include '../Controller/Usuario.php';
ini_set('display_errors', '1');

/* @var $_POST type */
$acao = $_POST['acao'];

    switch ($acao){
        case "cadastrar":
            $senha = $_POST['senha'];
            $tipo  = $_POST['tipo'];
            $login = $_POST['login'];
            $nome  = $_POST['nome'];
            
            ActionUsuario::cadastrar($senha, $tipo, $login, $nome);
            break;
        case "login":
            $senha = $_POST['senha'];
            $tipo  = $_POST['tipo'];
            $login = $_POST['login'];
            ActionUsuario::login($senha, $tipo, $login);
            break;
        case "listar":
            
            ActionUsuario::listar();
            break;
        
         case "excluir":
            
            $idUsuario = $_POST['idUsuario'];
            ActionUsuario::excluir($idUsuario);
            break;
        case "consultarID":
            
            $idUsuario = $_POST['idUsuario'];
            ActionUsuario::consultarID($idUsuario);
            break;
        
         case "alterar":
            
            $nome      = $_POST['nome'];
            $login     = $_POST['login'];
            $tipo      = $_POST['tipo'];
            $idUsuario = $_POST['idUsuario'];
            ActionUsuario::alterar($tipo,$nome,$login,$idUsuario);
            break;
    }


 class ActionUsuario
{
  
     static function cadastrar($senha,$tipo,$login,$nome)
     {
         
        $ControllerUsuario = new ControllerUsuario();
        
        $json = array();
        
        $json['sucesso'] = $ControllerUsuario->cadastrar($senha, $tipo, $login, $nome);
        
        echo json_encode($json);   
        
     }
    
     static function login($senha,$tipo,$login)
     {
        $ControllerUsuario = new ControllerUsuario();
        
        $json = array();
        
        $json['sucesso'] = $ControllerUsuario->login($senha, $tipo, $login);
        
        echo json_encode($json);
     }
     
     static function listar()
     {
       
        $ControllerUsuario = new ControllerUsuario();
         
        echo json_encode($ControllerUsuario->listar());
        
     }
     
     static function consultarID($idUsuario)
     {
        $ControllerUsuario = new ControllerUsuario();
        echo json_encode($ControllerUsuario->consultarID($idUsuario));
     }
     
     static function alterar($tipo,$nome,$login,$idUsuario)
     {
        $ControllerUsuario = new ControllerUsuario();
        
        $json = array();
        
        $json['sucesso'] = $ControllerUsuario->alterar($tipo,$nome,$login,$idUsuario);
        
        echo json_encode($json);
     }
     
     static function excluir($idUsuario)
     {
        $ControllerUsuario = new ControllerUsuario(); 
        
        $json = array();
        
        $json['sucesso'] = $ControllerUsuario->excluir($idUsuario);
        
        echo json_encode($json);
        
     }
}