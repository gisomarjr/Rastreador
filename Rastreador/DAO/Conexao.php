<?php

/**
 * @author Gisomar Junior <gisomarjr1994@gmail.com>
 * @since 1.0 08/07/2015
 */

class CONEXAO

  {

          var $usuario = "user";

          var $senha = "password";

          var $sid = "localhost";

          var $banco = "database";

          var $consulta = "";

  	var $link = "";  	
        
        function CONEXAO()
  	{

  		$this->Conecta();

  	}

  	function Conecta()

  	{

  		$this->link = mysql_connect($this->sid,$this->usuario,$this->senha);

  		if (!$this->link)

  		{

  			die("Problema na Conexão com o Banco de Dados");

  		}

  		elseif (!mysql_select_db($this->banco,$this->link))

  		{

  			die("Problema na Conexão com o Banco de Dados");

  		}

  	}

        function Desconecta()

  	{

  		return mysql_close($this->link);

  	}

        function Consulta($consulta)

  	{

          	$this->consulta = $consulta;

  		if ($resultado = mysql_query($this->consulta,$this->link))

  		{

  			return $resultado;

                } else {

  			return 0;

  		}

  	}

  }