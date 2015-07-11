<?php

/**
 * Description of Usuario
 *
 * @author gisomar
 * @since 10/07/2015
 */
include 'Util/Conexao.php';

class Cliente {
    
     /**
      * 
      * @author Gisomar Junior <gisomarjr1994@gmail.com>
      * 
     * Realiza cadastro do cliente 
     * 
     */
    function cadastrar($endereco,$rg,$cpf,$nome)
    {
        ini_set('display_errors', '1');
        
        $Obj_Conexao = new CONEXAO();
        
        $resultado = $Obj_Conexao->RodaQuery("INSERT INTO `Cliente` (`Endereco`, `RG`,  `Cpf`, `Nome_cliente`) VALUES ('$endereco', '$rg',  '$cpf', '$nome');");

        return $resultado;
    }
    
     /**
     * 
     * @return int
     */
    function alterar($endereco,$rg,$cpf,$nome,$idCliente)
    {
        ini_set('display_errors', '1');
        
        $Obj_Conexao = new CONEXAO();
        
        $resultado = $Obj_Conexao->RodaQuery("UPDATE `Cliente` SET `Endereco`='$endereco', `RG`='$rg', `Cpf`='$cpf', `Nome_cliente`='$nome' WHERE `Id_cliente`='$idCliente';");

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
        
        $resultado = $Obj_Conexao->RodaQuery("DELETE FROM `Cliente` WHERE `Id_cliente`='$id';");

        return $resultado;
    }
    
    /**
     * 
     * @return int
     */
    function listar()
    {
        
        $Obj_Conexao = new CONEXAO();

        $pega_dados = $Obj_Conexao->RodaQuery("select * from Cliente");

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
