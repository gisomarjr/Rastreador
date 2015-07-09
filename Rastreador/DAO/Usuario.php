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
    public static function consultar()
    {
        
        $Obj_Conexao = new CONEXAO();

        $pega_dados = $Obj_Conexao->Consulta("select * from USUARIO");

        $retorno = mysql_num_rows($id);

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

                              $nome = $linha[1];

                              print("$id - $nome");

                      }

        }

       return $Obj_Conexao->Consulta;
 
    }
}
