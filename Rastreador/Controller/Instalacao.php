<?php
        include '../DAO/Instalacao.php';
ini_set('display_errors', '1');

class ControllerInstalacao
{
     function cadastrar($data,$hora,$cliente,$os,$tecnico, $vendedor, $veiculo, $endereco, $valoradesao, $valormensal, $plano)
     {
        $DAOInstalacao = new Instalacao();
        return $DAOInstalacao->cadastrar($data,$hora,$cliente,$os,$tecnico, $vendedor, $veiculo, $endereco, $valoradesao, $valormensal, $plano);
     }
     
     function alterar($data,$hora,$cliente,$tecnico,$os, $vendedor, $veiculo, $endereco, $valoradesao, $valormensal, $plano)
     {
        $DAOInstalacao = new Instalacao();
        $DAOInstalacao->alterar($data,$hora,$cliente,$tecnico,$os, $vendedor, $veiculo, $endereco, $valoradesao, $valormensal, $plano);
     }
     
     function excluir($idInstalacao)
     {
        $DAOInstalacao = new Instalacao();
        $DAOInstalacao->excluir($idInstalacao);
     }
     
     function listar()
     {
        $DAOInstalacao = new Instalacao();
        $DAOInstalacao->listar();
     }
}
