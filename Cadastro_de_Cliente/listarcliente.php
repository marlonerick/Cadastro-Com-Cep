<?php
include("conexao.php");

$consulta = "SELECT * FROM cadastro";
$con = mysqli_query($conexao, $consulta) or die('Não foi possivel conectar' + mysql_error());
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="_css/home.css">
    <link rel="stylesheet" href="_css/anamneses.css">
    <title>Lista Cliente</title>
</head>

<body>
    <div>
        <div id="menu">
            <nav class="navbar navbar-expand-lg navbar navbar-light">
                <!--logo do site-->
                <a class=" logo navbar-brand" href="#">
                    <img src="brand/bootstrap-solid.svg" class="d-inline-block align-top" alt="">
                    <a class="navbar-brand" href="cadastrarcliente.php">Cadastro de Cliente</a>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="listarcliente.php">Lista de Clientes<span class="sr-only">(página atual)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="atualiza.php">Atualiza Clientes<span class="sr-only">(página atual)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="atualiza.php">Deleta Clientes<span class="sr-only">(página atual)</span></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOME</th>
                    <th scope="col">CPF</th>
                    <th scope="col">SEXO</th>
                    <th scope="col">DATA</th>
                    <th scope="col">CELULAR</th>
                    <th scope="col">ENDEREÇO</th>
                    <th scope="col">NUMERO</th>
                    <th scope="col">COMPLEMENTO</th>
                    <th scope="col">CIDADE</th>
                    <th scope="col">BAIRRO</th>
                    <th scope="col">ESTADO</th>
                    <th scope="col">CEP</th>

                </tr>
            </thead>
            <tbody>
                <?php while ($dado = $con->fetch_array()) { ?>
                    <tr>
                        <td><?php echo $dado["idcadastro"]; ?></td>
                        <td><?php echo $dado["nome"]; ?></td>
                        <td><?php echo $dado["cpf"]; ?></td>
                        <td><?php echo $dado["sexo"]; ?></td>
                        <td><?php echo $dado["data"]; ?></td>
                        <td><?php echo $dado["celular"]; ?></td>
                        <td><?php echo $dado["endereco"]; ?></td>
                        <td><?php echo $dado["numero"]; ?></td>
                        <td><?php echo $dado["complemento"]; ?></td>
                        <td><?php echo $dado["cidade"]; ?></td>
                        <td><?php echo $dado["bairro"]; ?></td>
                        <td><?php echo $dado["estado"]; ?></td>
                        <td><?php echo $dado["cep"]; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <div id="rodapé" class="fixed-bottom">
        <!-- Footer -->
        <footer class="page-footer font-small blue mastfoot mt-auto fixed-bottom">
            <!-- Copyright -->
            <div class=" align-footer footer-copyright text-center py-3">© 2019 Copyright:
                <a href="https://mdbootstrap.com/education/bootstrap/"> Marlon Erick</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </div>
</body>

</html>