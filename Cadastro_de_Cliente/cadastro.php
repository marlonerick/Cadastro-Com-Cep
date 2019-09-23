<?php
include("conexao.php");

$consulta = "SELECT * FROM cadastro";
$con = mysqli_query($conexao, $consulta) or die('Não foi possivel conectar' + mysql_error());

?>
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
                            <a class="nav-link" href="listarcliente.php">Listar de Clientes<span class="sr-only">(página atual)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="atualiza.php">Atualizar Clientes<span class="sr-only">(página atual)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="deleta.php">Deletar Clientes<span class="sr-only">(página atual)</span></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="container">
        <form id="info-inicial" method="post" action="cadastrarcliente.php" action="processa.php">
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
                    <label for="inputAddress">Endereço</label>
                    <input id="rua" type="text" class="form-control" id="inputAddress" placeholder="Rua, Avenida, Bairro." name="rua">
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
                    <input id="cidade" type="text" class="form-control" id="inputCidade" name="cidade" placeholder="Cidade">
                </div>
                <div class="form-group col-md-2">
                    <label>Estado:</label>
                    <input name="uf" type="text" id="uf" class="form-control" />
                </div>
                <form method="Post" action="processa.php">
                    <div class="form-group col-md-3">
                        <label for="inputCidade">Bairro</label>
                        <input id="bairro" type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputCep">Cep</label>
                        <input type="text" class="form-control" name="cep" id="cep" value="" maxlength="9" onblur="pesquisacep(this.value);">
                    </div>
            </div>
            <label>IBGE:
                <input name="ibge" type="text" id="ibge" size="8" class="form-control" /></label><br />
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <button type="reset" class="btn btn-primary">Limpar</button>
    </div>
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
    <!-- Adicionando Javascript -->
    <script type="text/javascript">
        function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value = ("");
            document.getElementById('bairro').value = ("");
            document.getElementById('cidade').value = ("");
            document.getElementById('uf').value = ("");
            document.getElementById('ibge').value = ("");
        }

        function meu_callback(conteudo) {
            if (!("erro" in conteudo)) {
                //Atualiza os campos com os valores.
                document.getElementById('rua').value = (conteudo.logradouro);
                document.getElementById('bairro').value = (conteudo.bairro);
                document.getElementById('cidade').value = (conteudo.localidade);
                document.getElementById('uf').value = (conteudo.uf);
                document.getElementById('ibge').value = (conteudo.ibge);
            } //end if.
            else {
                //CEP não Encontrado.
                limpa_formulário_cep();
                alert("CEP não encontrado.");
            }
        }

        function pesquisacep(valor) {

            //Nova variável "cep" somente com dígitos.
            var cep = valor.replace(/\D/g, '');

            //Verifica se campo cep possui valor informado.
            if (cep != "") {

                //Expressão regular para validar o CEP.
                var validacep = /^[0-9]{8}$/;

                //Valida o formato do CEP.
                if (validacep.test(cep)) {

                    //Preenche os campos com "..." enquanto consulta webservice.
                    document.getElementById('rua').value = "...";
                    document.getElementById('bairro').value = "...";
                    document.getElementById('cidade').value = "...";
                    document.getElementById('uf').value = "...";
                    document.getElementById('ibge').value = "...";

                    //Cria um elemento javascript.
                    var script = document.createElement('script');

                    //Sincroniza com o callback.
                    script.src = '//viacep.com.br/ws/' + cep + '/json/?callback=meu_callback';

                    //Insere script no documento e carrega o conteúdo.
                    document.body.appendChild(script);

                } //end if.
                else {
                    //cep é inválido.
                    limpa_formulário_cep();
                    alert("Formato de CEP inválido.");
                }
            } //end if.
            else {
                //cep sem valor, limpa formulário.
                limpa_formulário_cep();
            }
        };
    </script>
</body>

</html>