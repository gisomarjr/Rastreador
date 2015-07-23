<?php

include '../Controller/Usuario.php';
ini_set('display_errors', '1');

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
    }


 class ActionUsuario
{
  
     static function cadastrar($senha,$tipo,$login,$nome)
     {
        
        $ControllerUsuario = new ControllerUsuario();
        $ControllerUsuario->cadastrar($senha, $tipo, $login, $nome);
     }
    
     static function login($senha,$tipo,$login)
     {
        $ControllerUsuario = new ControllerUsuario();
        
        $json = array();
        
        $json['sucesso'] = $ControllerUsuario->login($senha, $tipo, $login);
        
        echo json_encode($json);
     }
}