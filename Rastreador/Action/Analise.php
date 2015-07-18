<?php

include '../Controller/Cliente.php';
ini_set('display_errors', '1');

    
    $acao =      $_POST['acao'];
    
    switch ($acao){
        case "cadastrar":
            
            $nome =      $_POST['nome'];
            $cpf =       $_POST['cpf'];
            $rg =        $_POST['rg'];
            $endereco  = $_POST['endereco'];
            ActionCliente::cadastrar($endereco,$rg,$cpf,$nome);
            break;
        case "alterar":
            
            $nome =      $_POST['nome'];
            $cpf =       $_POST['cpf'];
            $rg =        $_POST['rg'];
            $endereco  = $_POST['endereco'];
            $idCliente = $_POST['idCliente'];
            ActionCliente::alterar($endereco,$rg,$cpf,$nome,$idCliente);
            break;
        case "listar":
            
            ActionCliente::listar();
            break;
        case "excluir":
            
            $idCliente = $_POST['idCliente'];
            ActionCliente::excluir($idCliente);
            break;
    }


 class ActionCliente
{
  
     static function cadastrar($endereco,$rg,$cpf,$nome)
     {
        $ControllerCliente = new ControllerCliente();
        
        $json = array();
        
        $json['sucesso'] = $ControllerCliente->cadastrar($endereco,$rg,$cpf,$nome);
        
        echo json_encode($json);
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