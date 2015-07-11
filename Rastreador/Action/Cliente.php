<?php

include '../Controller/Cliente.php';

    $acao =      $_POST['acao'];
    $nome =      $_POST['nome'];
    $cpf =       $_POST['cpf'];
    $rg =        $_POST['rg'];
    $endereco  = $_POST['endereco'];
    $idCliente = $_POST['idCliente'];
    
    switch ($acao){
        case "cadastrar":
            ActionCliente::cadastrar($endereco,$rg,$cpf,$nome);
            break;
        case "alterar":
            ActionCliente::alterar($endereco,$rg,$cpf,$nome,$idCliente);
            break;
        case "listar":
            ActionCliente::listar();
            break;
        case "excluir":
            ActionCliente::excluir($idCliente);
            break;
    }


 class ActionCliente
{
  
     static function cadastrar($endereco,$rg,$cpf,$nome)
     {
        $ControllerCliente = new ControllerCliente();
        $ControllerCliente->cadastrar($endereco,$rg,$cpf,$nome);
     }
     
     static function alterar($endereco,$rg,$cpf,$nome,$idCliente)
     {
        $ControllerCliente = new ControllerCliente();
        $ControllerCliente->alterar($endereco,$rg,$cpf,$nome,$idCliente);
     }
     
     static function excluir($idCliente)
     {
        $ControllerCliente = new ControllerCliente();
        $ControllerCliente->excluir($idCliente);
     }
     
     static function listar()
     {
        $ControllerCliente = new ControllerCliente();
        $ControllerCliente->listar();
     }
    
}