<?php
   
include '../DAO/Usuario.php';

class ControllerUsuario
{
     function cadastrar($senha,$tipo,$login,$nome,$idLoja)
     {
        $DAOUsuario = new Usuario();
        $DAOUsuario->cadastrar($senha, $tipo, $login, $nome, $idLoja);
     }
    
}