<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="_css/home.css">
    <link rel="stylesheet" href="_css/anamneses.css">
    <title>Cadastro de Cliente</title>
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
                            <a class="nav-link" href="deleta.php">Deleta Clientes<span class="sr-only">(página atual)</span></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="container">
        <form id="info-inicial" method="post" action="deletacliente.php">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputName">Nome</label>
                    <input type="name" class="form-control" id="inputName" placeholder="Nome Completo" name="nome">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputRG">R.G</label>
                    <input type="text" class="form-control" id="inputRG" placeholder="Registro Geral" name="rg">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputCPF">CPF</label>
                    <input type="text" class="form-control" id="inputCPF" placeholder="Cadastro de pessoa Fisica" name="cpf">
                </div>
                <div class="col-md-3">
                    <label for="sexo">Sexo</label>
                    <select id="sexo" class="custom-select" name="sexo">
                        <option value="0">Selecione o Sexo</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Feminino">Feminino</option>
                    </select>
                </div>
                <div class=" col-md-3">
                    <label for="data">Data de Nascimento</label>
                    <input type="date" class="form-control" id="datapicker" name="date" placeholder="DD-MM-YYYY">
                </div>
                <div class="col-md-3">
                    <label for="estadoCivil">Estado Civil</label>
                    <select id="estadoCivil" class="custom-select" name="estadoCivil">
                        <option value="0">Selecione o Estado Civil</option>
                        <option value="Casado(a)">Casado(a)</option>
                        <option value="Solteiro(a)">Solteiro(a)</option>
                        <option value="Separado(a)">Separado(a)</option>
                        <option value="Divorciado(a)">Divorciado(a)</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputProfissao">Profissão</label>
                    <input type="text" class="form-control" id="inputProfissao" placeholder="Profissão" name="profissao">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputTelefone">Telefone</label>
                    <input type="text" class="form-control" id="inputTelefone" placeholder="Telefone" name="telefone">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputCelular">Celular</label>
                    <input type="text" class="form-control" id="inputTelefone" placeholder="Celular" name="celular">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail">E-mail</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="E-mail" name="email">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputAddress">Endreço</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Rua, Avenida, Bairro." name="endereco">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputCep">Numero</label>
                    <input type="text" class="form-control" id="inputCep" name="numero">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail">Complemento</label>
                    <input type="text" class="form-control" id="inputEmail" placeholder="Complemento" name="complemento">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputCidade">Cidade</label>
                    <input type="text" class="form-control" id="inputCidade" name="cidade" placeholder="Cidade">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputState">Estado</label>
                    <select id="inputState" class="form-control" name="estado">
                        <option value="0">Selecione o Estado</option>
                        <option value="DF">Distrito Federal</option>
                        <optgroup label="Norte">
                            <option value="AM">Amazonas</option>
                            <option value="RR">Roraima</option>
                            <option value="AP">Amapá</option>
                            <option value="PA">Pará</option>
                            <option value="TO">Tocantins</option>
                            <option value="RO">Rondônia</option>
                            <option value="AC">Acre</option>
                        </optgroup>
                        <optgroup label="Nordeste">
                            <option value="MA">Maranhão</option>
                            <option value="PI">Piauí</option>
                            <option value="CE">Ceará</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PB">Paraíba</option>
                            <option value="SE">Sergipe</option>
                            <option value="AL">Alagoas</option>
                            <option value="BA">Bahia</option>
                        </optgroup>
                        <optgroup label="Centro-Oeste">
                            <option value="GO">Goiás</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MT">Mato Grosso</option>
                        </optgroup>
                        <optgroup label="Sudeste">
                            <option value="SP">São Paulo</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="ES">Espirito Santo</option>
                        </optgroup>
                        <optgroup label="Sul">
                            <option value="PR">Paraná</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="SC">Santa Catarina</option>
                        </optgroup>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputCep">Cep</label>
                    <input type="text" class="form-control" id="inputCep" name="cep">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputid">ID</label>
                    <input type="text" class="form-control" id="inputid" name="id">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Apagar</button>
            <button type="reset" class="btn btn-primary">Limpar</button>
        </form>
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
    <script src='http://code.jquery.com/jquery-2.1.3.min.js'></script>
    <script src='../js/bootstrap.min.js'></script>
    <script>
        $(function() {
            $('.dropdown-toggle').dropdown();
        });
    </script>
</body>

</html>