<?php

/**
 * Description of Usuario
 *
 * @author gisomar
 * @since 10/07/2015
 */
include 'Util/Conexao.php';

class Analise {
    
     /**
      * 
      * @author Gisomar Junior <gisomarjr1994@gmail.com>
      * 
     * Realiza cadastro do cliente 
     * 
     */
    function cadastrar($idanalise,$idcliente,$idanalista,$status)
    {
        ini_set('display_errors', '1');
        
        $Obj_Conexao = new CONEXAO();
        
        $resultado = $Obj_Conexao->RodaQuery("INSERT INTO `analisa` (`id_analise`, `id_cliente`,  `id_usuario`, `situacao`) VALUES ('$idanalise', '$idcliente',  '$idanalista', '$status');");

        return $resultado;
    }
    
     /**
     * 
     * @return int
     */
    function alterar($idanalise,$idanalista,$status)
    {
        ini_set('display_errors', '1');
        
        $Obj_Conexao = new CONEXAO();
        
        $resultado = $Obj_Conexao->RodaQuery("UPDATE `analise` SET `id_usuario`='$idanalista', `situacao`='$status' WHERE `id_analise`='$idanalise';");

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
        
        $resultado = $Obj_Conexao->RodaQuery("DELETE FROM `analise` WHERE `id_analise`='$id';");

        return $resultado;
    }
    
    /**
     * 
     * @return int
     */
    function listar()
    {
        
        $Obj_Conexao = new CONEXAO();

        $pega_dados = $Obj_Conexao->RodaQuery("select * from analise");

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
