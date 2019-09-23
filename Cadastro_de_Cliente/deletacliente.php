<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
</head>

</html>
<?php
session_start();
include_once("conexao.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);

$busca_cliente = "DELETE FROM cadastro WHERE idcadastro = '$id'";
$busca_cliente = mysqli_query($conexao, $busca_cliente);
if (mysqli_insert_id($conexao)) {
    $_SESSION['msg'] = "<p style='color:green;font-weight: bold;'>Usuário atualizado com sucesso</p>";
    header('Location: atualiza.php');
} else {
    $_SESSION['msg'] = "<p style='color:red;font-weight: bold;'>Usuário não foi atualizado com sucesso</p>";
    header('Location: atualiza.php');
}

?>