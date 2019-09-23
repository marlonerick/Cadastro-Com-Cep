<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <title></title>
</head>
<div>
    <!--conexão base de dados-->
    <?php
    define('HOST', '127.0.0.1');    //ip do bd
    define('USUARIO', 'root1');      //usuario do bd
    define('SENHA', 'w3iE6Vm5AxqYO53i');    //senha do bd
    define('DB', 'cadastro');          //nome da bd
    $conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die('Não foi possivel conectar' + mysql_error());
    ?>
</div>