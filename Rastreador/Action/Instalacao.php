<?php

include '../Controller/Instalacao.php';
ini_set('display_errors', '1');

    
    $acao =      $_POST['acao'];
    
    switch ($acao){
        case "cadastrar":
            
            $data = $_POST['data'];
                $hora = $_POST['hora'];
                $cliente = $_POST['cliente'];
                $os = $_POST['os'];
                $tecnico = $_POST['tecnico']; 
                $vendedor = $_POST['vendedor']; 
                $veiculo = $_POST['veiculo']; 
                $endereco = $_POST['endereco']; 
                $valoradesao = $_POST['valoradesao']; 
                $valormensal = $_POST['valormensal']; 
                $plano = $_POST['plano'];
            ActionInstalacao::cadastrar($data,$hora,$cliente,$os,$tecnico, $vendedor, $veiculo, $endereco, $valoradesao, $valormensal, $plano);
            break;
        case "alterar":
            
            $idInstalacao = $_POST['idinstalaao'];
            $data = $_POST['data'];
                $hora = $_POST['hora'];
                $cliente = $_POST['cliente'];
                $os = $_POST['os'];
                $tecnico = $_POST['tecnico']; 
                $vendedor = $_POST['vendedor']; 
                $veiculo = $_POST['veiculo']; 
                $endereco = $_POST['endereco']; 
                $valoradesao = $_POST['valoradesao']; 
                $valormensal = $_POST['valormensal']; 
                $plano = $_POST['plano'];
            ActionInstalacao::alterar($id,$data,$hora,$cliente,$os,$tecnico, $vendedor, $veiculo, $endereco, $valoradesao, $valormensal, $plano);
            break;
        case "listar":
            
            ActionInstalacao::listar();
            break;
        case "excluir":
            
            $idInstalacao = $_POST['idInstalacao'];
            ActionInstalacao::excluir($idInstalacao);
            break;
    }


 class ActionInstalacao
{
  
     static function cadastrar($data,$hora,$cliente,$os,$tecnico, $vendedor, $veiculo, $endereco, $valoradesao, $valormensal, $plano)
     {
        $ControllerInstalacao = new ControllerInstalacao();
        $ControllerInstalacao->cadastrar($data,$hora,$cliente,$os,$tecnico, $vendedor, $veiculo, $endereco, $valoradesao, $valormensal, $plano);
     }
     
     static function alterar($id,$data,$hora,$cliente,$os,$tecnico, $vendedor, $veiculo, $endereco, $valoradesao, $valormensal, $plano)
     {
        $ControllerInstalacao = new ControllerInstalacao();
        $ControllerInstalacao->alterar($id,$data,$hora,$cliente,$os,$tecnico, $vendedor, $veiculo, $endereco, $valoradesao, $valormensal, $plano);
     }
     
     static function excluir($idInstalacao)
     {
        $ControllerInstalacao = new ControllerInstalacao();
        $ControllerInstalacao->excluir($idInstalacao);
     }
     
     static function listar()
     {
        $ControllerInstalacao = new ControllerInstalacao();
        $ControllerInstalacao->listar();
     }
    
}