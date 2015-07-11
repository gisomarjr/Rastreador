<?php
   
include '../DAO/Cliente.php';

class ControllerCliente
{
     function cadastrar($endereco,$rg,$cpf,$nome)
     {
        $DAOCliente = new Cliente();
        $DAOCliente->cadastrar($endereco,$rg,$cpf,$nome);
     }
     
     function alterar($endereco,$rg,$cpf,$nome,$idCliente)
     {
        $DAOCliente = new Cliente();
        $DAOCliente->alterar($endereco,$rg,$cpf,$nome,$idCliente);
     }
     
     function excluir($idCliente)
     {
        $DAOCliente = new Cliente();
        $DAOCliente->excluir($idCliente);
     }
     
     function listar()
     {
        $DAOCliente = new Cliente();
        $DAOCliente->listar();
     }
    
}