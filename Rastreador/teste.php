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
    </head>
    <body>
        <?php
         include 'DAO/Usuario.php';
         ini_set('display_errors', '1');
         
         $usuario = new Usuario();
     
         $usuario->cadastrar($senha, $tipo, $login, $nome, $idLoja);
         $usuario->consultar();
        
        ?>
    </body>
</html>
