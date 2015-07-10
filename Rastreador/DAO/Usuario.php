<?php

/**
 * Description of Usuario
 *
 * @author gisomar
 * @since 10/07/2015
 */
include 'Util/Conexao.php';

class Usuario {
    
     /**
      * 
      * @author Gisomar Junior <gisomarjr1994@gmail.com>
      * 
     * Realiza cadastro do usuário 
     * @param string $senha senha do usuário
     * @param string $tipo tipo do usuário no perfil
     * @param string $login login do usuário no perfil
     * @param string $nome nome do usuário no perfil
     * @param int $idLoja id da loja do usuário
     * @return int
     */
    function cadastrar($senha,$tipo,$login,$nome,$idLoja)
    {
        ini_set('display_errors', '1');
        
        $Obj_Conexao = new CONEXAO();
        
        $resultado = $Obj_Conexao->RodaQuery("INSERT INTO `usuario` (`Senha`, `Tipo`, `Login`, `Nome`, `Id_loja`) VALUES ('$senha', '$tipo', '$login', '$nome', '$idLoja');");

        return $resultado;
    }
    
     /**
     * 
     * @return int
     */
    function alterar($senha,$tipo,$login,$nome,$idLoja)
    {
        ini_set('display_errors', '1');
        
        $Obj_Conexao = new CONEXAO();
        
        $resultado = $Obj_Conexao->RodaQuery("");

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
        
        $resultado = $Obj_Conexao->RodaQuery("");

        return $resultado;
    }
    
    /**
     * 
     * @return int
     */
    function listar()
    {
        
        $Obj_Conexao = new CONEXAO();

        $pega_dados = $Obj_Conexao->RodaQuery("select * from Usuario");

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
