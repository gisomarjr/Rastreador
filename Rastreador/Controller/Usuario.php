<?php
   
include '../DAO/Usuario.php';
ini_set('display_errors', '1');

class ControllerUsuario
{
     function cadastrar($senha,$tipo,$login,$nome,$idLoja)
     {
        $DAOUsuario = new Usuario();
        $DAOUsuario->cadastrar($senha, $tipo, $login, $nome, $idLoja);
     }
    
}