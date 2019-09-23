<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
</head>

</html>
<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$rg = filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_STRING);
$data = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING);
$estadoCivil = filter_input(INPUT_POST, 'estadoCivil', FILTER_SANITIZE_STRING);
$profissao = filter_input(INPUT_POST, 'profissao', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$celular = filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
$numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_STRING);
$complemento = filter_input(INPUT_POST, 'complemento', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
$estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);

$busca_cliente = "UPDATE cadastro SET nome='$nome', rg='$rg',cpf='$cpf',sexo='$sexo',data='$data',estadoCivil='$estadoCivil',profissao='$profissao',telefone='$telefone',celular='$celular',email='$email',endereco='$endereco',numero='$numero',complemento='$complemento',cidade='$cidade',estado='$estado',cep='$cep' WHERE idcadastro='$id'";
$busca_cliente = mysqli_query($conexao, $busca_cliente);
if (mysqli_insert_id($conexao)) {
    $_SESSION['msg'] = "<p style='color:green;font-weight: bold;'>Usuário atualizado com sucesso</p>";
    header('Location: atualiza.php');
} else {
    $_SESSION['msg'] = "<p style='color:red;font-weight: bold;'>Usuário não foi atualizado com sucesso</p>";
    header('Location: atualiza.php');
}

?>