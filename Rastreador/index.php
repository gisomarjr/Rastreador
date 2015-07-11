<!DOCTYPE html>

<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
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
            
        
    </head>
    <body>

<div class="container">
    <div class="row">
		<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Efetuar Login</h3>
			 	</div>
			  	<div class="panel-body">
                                    <form method="post" action="" accept-charset="UTF-8" role="form">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="Login" name="login" type="text">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Senha" name="senha" type="password" value="">
			    		</div>
                                            
			    <select id="tipo" name="tipo" class="form-control input-lg">
			      <option value="1">Administrador</option>
			      <option value="2">Funcionario</option>
			      <option value="3">Cliente</option>
			    </select>
                                           
			    	    </div>
			    		<input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
                                       
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
</div>
    </body>
</html>