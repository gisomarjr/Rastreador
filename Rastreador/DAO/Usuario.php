<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author gisomar
 */
include 'Util/Conexao.php';

class Usuario {
    
     /**
     * 
     * @return int
     */
    function cadastrar()
    {
        
        $Obj_Conexao = new CONEXAO();
        
        $resultado = $Obj_Conexao->Inserir("
          INSERT INTO `rastreador`.`Usuario` (`Senha`, `Tipo`, `Login`, `Id_usuario`, `Nome`, `Id_loja`)
          VALUES ('kjhkj', 'kjhkj', 'kjhkj', 'kljklsfs', 'mkj', 'klkl');

         ");

        return $resultado;
    }
    
    
    /**
     * 
     * @return int
     */
    function consultar()
    {
        
        $Obj_Conexao = new CONEXAO();

        $pega_dados = $Obj_Conexao->Consulta("select * from Usuario");

        $retorno = mysql_num_rows($pega_dados);

        if($retorno == 0 )

        {

            print("<center>Erro ao carregar as informações !!<br>");

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
