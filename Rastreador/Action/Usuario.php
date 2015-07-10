<?php

include '../Controller/Usuario.php';

class ActionUsuario
{
    
   
    
     function cadastrar($senha,$tipo,$login,$nome,$idLoja)
     {
        $ControllerUsuario = new ControllerUsuario();
        $ControllerUsuario->cadastrar($senha, $tipo, $login, $nome, $idLoja);
     }
    
}