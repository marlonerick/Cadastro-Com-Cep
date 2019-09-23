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
$endereco = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_STRING);
$numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_STRING);
$complemento = filter_input(INPUT_POST, 'complemento', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
$estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);

if (empty($nome) && empty($rg) && empty($cpf) && empty($sexo) && empty($data) && empty($estadoCivil) && empty($profissao) && empty($telefone) && empty($celular) && empty($email) && empty($endereco) && empty($numero) && empty($cidade) && empty($bairro) && empty($estado) && empty($cep)) {
    $_SESSION['campovazio'] = 'Preencher todos os campos !';
    header('Location:cadastro.php');
} else {
    $result_cliente = "INSERT INTO cadastro (nome,rg,cpf,sexo,data,estadoCivil,profissao,telefone,celular,email,endereco,numero,complemento,cidade,estado,cep)VALUES ('$nome','$rg','$cpf','$sexo','$data','$estadoCivil','$profissao','$telefone','$celular','$email','$endereco','$numero','$complemento','$cidade','$estado','$cep')";
    $resultado_cliente = mysqli_query($conexao, $result_cliente);
    if (mysqli_insert_id($conexao)) {
        $_SESSION['msg'] = "<p style='color:green;font-weight: bold;'>Usuário cadastrado com sucesso</p>";
        header('Location: cadastro.php');
    } else {
        $_SESSION['msg'] = "<p style='color:red;font-weight: bold;'>Usuário não foi cadastrado com sucesso</p>";
        header('Location: cadastro.php');
    }
}

?>