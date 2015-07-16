<?php
    ini_set('display_errors', '1');
    include '../Controller/Seguranca.php';
    include '../Controller/Usuario.php';
    Seguranca::verificaLogado();
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Usuário Interno</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <style type="text/css">
        @import url(http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css);
        body{margin-top:20px;}
        .fa-fw {width: 2em;}
    </style>
     <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    
    <!-- jquery -->
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
        
</head>
<body>
    
    <nav class="navbar navbar-default navbar-static-top">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">
                            Rastreador - <?php echo ControllerUsuario::verificaPerfil($_SESSION['tipo']); ?>
			</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">			
			<form class="navbar-form navbar-left" method="GET" role="search">
				
                	</form>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="http://www.pingpong-labs.com" target="_blank">Visit Site</a></li>
				<li class="dropdown ">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
						Seu Perfil
						<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li class="dropdown-header">SETTINGS</li>
							<li class=""><a href="#">Other Link</a></li>
							<li class=""><a href="#">Other Link</a></li>
							<li class=""><a href="#">Other Link</a></li>
							<li class="divider"></li>
                                                        <form target="post" name="formSair" action="../Controller/Seguranca.php"> 
                                                            <input type="hidden" name="acao" value="sair">
                                                            <li> <a class="" onclick="javascript:document.formSair.submit();" href="#">Sair</a></li>
                                                        </form>
                                                </ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
    
    <!-- Menu a esquerda -->
       
<?php 
    
    $tipo = $_SESSION['tipo'];
    switch ($tipo){
        case "1":
            include '../include/menuAdministrador.html'; 
        break;
        
    }

?>


</body>
</html>
