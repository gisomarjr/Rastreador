<!DOCTYPE html>

<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
         <!--Jquery -->
        <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
       
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <title>
            Login
        </title>
        
        <style>
            body{padding-top:20px;}
        </style>
         <style>
            body { margin-top:30px; }
hr.message-inner-separator
{
    clear: both;
    margin-top: 10px;
    margin-bottom: 13px;
    border: 0;
    height: 1px;
    background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
    background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
    background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
    background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
}
            
        </style>
        
        
        <script type="text/javascript">
	jQuery(document).ready(function(){
            
		jQuery('#ajax_form').submit(function(){
			var dados = jQuery( this ).serialize();
 
			jQuery.ajax({
                            
				type: "POST",
				url: "Action/Usuario.php",
                                dataType : "json",
				data: dados,
				success: function( data )
				{
                                    	if(data.sucesso)
                                        {
                                            $(function(){
                                                $(location).attr('href', '/View/interno.php');
                                            })

                                        }else{
                                            $(function(){
                                                $("#msgErro").html("");
                                                $("#msgErro").append("<div  class='container'>\n\
                                                                <div  class='row'>\n\
                                                  <div  class='col-md-4 col-md-offset-4'>\n\
                                                  <div class='alert alert-danger'>\n\
                                                  <span class='glyphicon glyphicon-hand-right'></span> <strong>Erro :(</strong><hr class='message-inner-separator'><p>Não foi possível efetuar o login</p>\n\
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
        <div align="center" id="msgErro"></div>

<div class="container">
    <div class="row">
        
		<div class="col-md-4 col-md-offset-4">
                    
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Efetuar Login</h3>
			 	</div>
			  	<div class="panel-body">
                                    <form method="post" id="ajax_form" action="" accept-charset="UTF-8" role="form">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="Login" name="login" type="text">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Senha" name="senha" type="password" value="">
			    		</div>
                                            
			    <select id="tipo" name="tipo" class="form-control input-lg">
			      <option value="1">Administrador</option>
			      <option value="2">Vendedor</option>
			      <option value="3">Analista</option>
			    </select>
                                           
			    	    </div>
                
                                        <input type="hidden" name="acao" value="login">
			    		<input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
                </div>
                </div>       
        
			    	</fieldset>
                                        
			      	</form>
			    </div>
			</div>
		</div>
	</div>
</div>
    </body>
</html>