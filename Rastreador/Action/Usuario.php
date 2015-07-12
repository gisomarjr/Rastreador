<?php

include '../Controller/Usuario.php';
ini_set('display_errors', '1');

    $acao = $_POST['acao'];

    switch ($acao){
        case "cadastrar":
            ActionUsuario::cadastrar($senha, $tipo, $login, $nome, $idLoja);
            break;
    }


 class ActionUsuario
{
  
      static function cadastrar($senha,$tipo,$login,$nome,$idLoja)
     {
        $ControllerUsuario = new ControllerUsuario();
        $ControllerUsuario->cadastrar($senha, $tipo, $login, $nome, $idLoja);
     }
    
}