<?php

/**
 * Description of Instalacao
 *
 * @author gisomar
 * @since 10/07/2015
 */
include 'Util/Conexao.php';

class Instalacao {
    
     /**
      * 
      * @author Gisomar Junior <gisomarjr1994@gmail.com>
      * 
     * Realiza cadastro do cliente 
     * 
     */
    function cadastrar($data,$hora,$cliente,$os,$tecnico, $vendedor, $veiculo, $endereco, $valoradesao, $valormensal, $plano)
    {
        ini_set('display_errors', '1');
        
        $Obj_Conexao = new CONEXAO();
        
        $resultado = $Obj_Conexao->RodaQuery("INSERT INTO `instalacao` (`data`, `hora`,  `id_cliente`, `id_OS`, `id_tecnico`, `id_usuario`, `id_veiculo`, `id_endereco`, `id_plano`, `valordesao`, `valormensal`) "
                . "VALUES ('$data','$hora','$cliente','$os','$tecnico', '$vendedor', '$veiculo', '$endereco', '$plano', '$valoradesao', '$valormensal');");

        return $resultado;
    }
    
     /**
     * 
     * @return int
     */
    function alterar($id,$data,$hora,$cliente,$tecnico,$os, $vendedor, $veiculo, $endereco, $valoradesao, $valormensal, $plano)
    {
        ini_set('display_errors', '1');
        
        $Obj_Conexao = new CONEXAO();
        
        $resultado = $Obj_Conexao->RodaQuery("UPDATE `Cliente` SET `data=$data`, `hora=$hora`,  `id_cliente=$cliente`, `id_OS=$os`, `id_tecnico=$tecnico`, `id_usuario=$vendedor`, `id_veiculo=$veiculo`, `id_endereco=$endereco`, `id_plano=$plano`, `valordesao=$valoradesao`, `valormensal=$valormensal` WHERE `id_instalacao=$id`;");
                

        return $resultado;
    }
    
      /**
     * 
     * @return int
     */
    function excluir($id)
    {
        ini_set('display_errors', '1');
        
        $Obj_Conexao = new CONEXAO();
        
        $resultado = $Obj_Conexao->RodaQuery("DELETE FROM `instalacao` WHERE `id_instalacao`='$id';");

        return $resultado;
    }
    
    /**
     * 
     * @return int
     */
    function listar()
    {
        
        $Obj_Conexao = new CONEXAO();

        $pega_dados = $Obj_Conexao->RodaQuery("select * from instalacao");

        $retorno = mysql_num_rows($pega_dados);

        if($retorno == 0 )

        {

            print("<center>Não encontrado!<br>");

            return 0;

        }

        else

        {

            for ($i = 0; $i < $retorno; ++$i)

                {
                    $linha = mysql_fetch_array($pega_dados);

                    $id = $linha[1];

                    $nome = $linha[2];

                    print("$id - $nome");
                }
        }
    }
}
