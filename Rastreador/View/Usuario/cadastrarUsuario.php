<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<head>
    
    <script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('#ajax_form').submit(function(){
			var dados = jQuery( this ).serialize();
 
			jQuery.ajax({
				type: "POST",
				url: "../../Action/Usuario.php",
                                dataType : "json",
				data: dados,
				success: function( data )
				{
					if(data.sucesso)
                                        {
                                            $(function(){
                                                 
                                                $(function(){
                                                $("#msgSucesso").html("");
                                                $("#msgSucesso").append("<div  class='container'>\n\
                                                                <div  class='row'>\n\
                                                  <div  class='col-md-6 col-md-offset-3 '>\n\
                                                  <div class='alert alert-success'>\n\
                                                  <span class='glyphicon glyphicon-ok'></span> <strong>Cadastro de Cliente</strong><hr class='message-inner-separator'><p>Cadastro Efetuado com Sucesso!</p>\n\
                                                                  </div>\n\
                                                                  </div>\n\
                                                                  </div>\n\
                                                                  </div>");
                                              
                                            })
                                            
                                            })

                                        }else{
                                            $(function(){
                                                $("#msgErro").html("");
                                                $("#msgErro").append("<div  class='container'>\n\
                                                                <div  class='row'>\n\
                                                  <div  class='col-md-6 col-md-offset-3 '>\n\
                                                  <div class='alert alert-danger'>\n\
                                                  <span class='glyphicon glyphicon-hand-right'></span> <strong>Erro :(</strong><hr class='message-inner-separator'><p>Não foi possível Cadastrar o Cliente</p>\n\
                                                                  </div>\n\
                                                                  </div>\n\
                                                                  </div>\n\
                                                                  </div>");
                                              
                                            })
                                        }
				}
			});
			
			return false;
		});
	});
	</script>
  
    
</head>
       
    <body>
      
        <div align="center">
            <form action="#" id="ajax_form" method="post" class="form-horizontal">
    <fieldset>

<!-- Form Name -->
<legend>Cadastrar Usuario</legend>

<!-- Text input-->
<div class="control-group">
    
        <div align="center" id="msgSucesso"></div> <div align="center" id="msgErro"></div>
    
  <label class="control-label" for="nome">Nome:</label>
  <div class="controls">
    <input id="nome" name="nome" type="text" placeholder="Informe seu nome" class="input-xlarge" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="cpf">Login:</label>
  <div class="controls">
    <input id="cpf" name="login" type="text" placeholder="login" class="input-xlarge" required="">
 
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="rg">Tipo</label>
  <div class="controls">
     <select style="width:190px" id="tipo" name="tipo" class="form-control input-lg">
			      <option value="1">Administrador</option>
			      <option value="2">Vendedor</option>
			      <option value="3">Analista</option>
			    </select> 
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="endereco">Senha:</label>
  <div class="controls">
      <input id="endereco" name="senha" type="password" placeholder="Informe a Senha" class="input-xlarge" required="">
    
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
