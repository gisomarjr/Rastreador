<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
         
         <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        
        <!--Jquery -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        
        <script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('#ajax_form').submit(function(){
			var dados = jQuery( this ).serialize();
 
			jQuery.ajax({
				type: "POST",
				url: "../../Action/Cliente.php",
                                dataType : "json",
				data: dados,
				success: function( data )
				{
					if(data.sucesso)
                                        {
                                            $(function(){
                                                $("#msgSucesso").append("<span><strong>Cadastro Efetuado com Sucesso!</strong></span>");
                                            })

                                        }else{
                                            $(function(){
                                                $("#msgErro").append("<span><strong>Erro ao tentar cadastrar o Cliente </strong></span>");
                                            })
                                        }
				}
			});
			
			return false;
		});
	});
	</script>
  
        
        <title>Cadastrar Cliente</title>
    </head>
    <body>
      
        <div align="center">
            <form action="" id="ajax_form" method="post" class="form-horizontal">
    <fieldset>

<!-- Form Name -->
<legend>Cadastrar Cliente</legend>

<!-- Text input-->
<div class="control-group">
    
    <div class="bg-success" id="msgSucesso"></div> <div class="bg-danger" id="msgErro"></div>
  
    <label class="control-label" for="nome">Nome:</label>
  <div class="controls">
    <input id="nome" name="nome" type="text" placeholder="Informe seu nome" class="input-xlarge" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="cpf">CPF:</label>
  <div class="controls">
    <input id="cpf" name="cpf" type="text" placeholder="CPF" class="input-xlarge" required="">
    <p class="help-block">Digite um CPF válido</p>
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="rg">RG</label>
  <div class="controls">
    <input id="rg" name="rg" type="text" placeholder="RG" class="input-xlarge" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="endereco">Endereço:</label>
  <div class="controls">
    <input id="endereco" name="endereco" type="text" placeholder="Endereço completo" class="input-xlarge" required="">
    
  </div>
</div>

<!-- Button -->
<div class="control-group">
  <label class="control-label" for="btnEnviar"></label>
  <div class="controls">
    <input type="hidden" name="acao" value="cadastrar">
    <button id="btnEnviar" name="btnEnviar" class="btn btn-success">Enviar</button>
  </div>
</div>

</fieldset>
</form>

        </div>
            
    </body>
</html>
