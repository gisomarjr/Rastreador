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
    
        
        <title>Cadastrar Usuário</title>
    </head>
    <body>
      
        <div align="center">
            <form action="../../Action/Usuario.php" method="post" class="form-horizontal">
    <fieldset>

<!-- Form Name -->
<legend>Cadastrar Usuario</legend>

<!-- Text input-->
<div class="control-group">
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
     <select id="tipo" name="tipo" class="form-control input-lg">
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