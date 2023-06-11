<?php

if(isset($_POST['submit'])){
// print_r('Nome: ' . $_POST['nome']);
 //print_r('<br>');
 //print_r('Telefone: ' . $_POST['telefone']); 
 //print_r('<br>');
 //print_r('Email: ' . $_POST['email']); 
 //print_r('<br>'); 
 //print_r('Sexo: ' . $_POST['genero']);
 //print_r('<br>'); 
 //print_r('Data de Nascimento: ' . $_POST['data_nascimento']);
 //print_r('<br>');
 //print_r('Cidade: ' . $_POST['cidade']);
// print_r('<br>');
 //print_r('Estado: ' . $_POST['estado']);
 //print_r('<br>');
 //print_r('Endereço: ' . $_POST['endereco']);

 include_once('config.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$sexo = $_POST['genero'];
$data_nasc = $_POST['data_nascimento'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$endereco = $_POST['endereco'];

$result = mysqli_query($conexao, "INSERT INTO clientes(nome, email, telefone, sexo, data_nasc, cidade, estado, endereco) VALUES('$nome', '$telefone', '$email', '$sexo', '$data_nasc', '$cidade', '$estado', '$endereco')");

}
?>


<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Página Cadastrar Clientes</title>
    <link rel="icon" href="favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

</head>

<body class="form">
    <br>

    <div class="container text-center">
        <img src="img/cadastro.png"><br>
        <legend>Cadastro de Clientes</legend>
        <div class="row">
            <div class="">
                <div class="col-lg-4 offset-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <form action="cad.php" method="POST">
                                <div class="mb-3">
                                    <label>Nome</label>
                                    <input class="form-control" name="nome" required />

                                </div>

                                <div class="mb-3">
                                    <label>E-mail</label>
                                    <input class="form-control" name="email" required>
                                </div>
                                <div class="mb-3">
                                    <label>Telefone</label>
                                    <input class="form-control" name="telefone" required />
                                </div>

                                <p>Sexo:</p>

                                <div class="mb-3">
                                    <input type="radio" name="genero" value="feminino" required>
                                    <label for="feminino">Feminino</label>
                                </div>
                                <div class="mb-3">
                                    <input type="radio" name="genero" value="masculino" required>
                                    <label for="masculino">Masculino</label>
                                </div>
                                <br>
                                <div class="mb-3">
                                    <label for="data_nascimento">Data de Nascimento</label>
                                    <input type="date" name="data_nascimento" id="data_nascimento" class="form-control"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="cidade">Cidade</label>
                                    <input class="form-control" type="text" name="cidade" required>

                                </div>
                                <div class="mb-3">
                                    <label for="estado">Estado</label>
                                    <input class="form-control" type="text" name="estado" required>

                                </div>
                                <div class="mb-3">
                                    <label for="endereco">Endereço</label>
                                    <input class="form-control" type="text" name="endereco" required>

                                </div>
                                <input type="submit" name="submit" id="submit" value="Cadastrar"
                                    class="btn btn-outline-dark">
                                <input type="reset" value="Limpar" class="btn btn-outline-dark">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <br>
        <p>
            <a href="index.html" class="btn btn-success">Voltar a Página Principal</a>

        </p>
    </div>

    <br><br>
    <footer class="border-top fixed-float text-dark">
        <div class="container">
            <div class="row py-3">
                <div class="col-12 col-md-4 text-center text-md-left">
                    &copy;2023 dsm - Web Design
                    <img src="img/codigo.png">
                </div>
                <br>
                <div class="col-12 col-md-4 text-center">
                    <a href="base.html" class="text-decoration-none text-dark">Política de Privacidade</a><br>
                    <a href="termos.html" class="text-decoration-none text-dark">Termos de Uso</a><br>
                    <a href="trocas.html" class="text-decoration-none text-dark">Trocas e Devoluções</a><br>
                    <a href="quem_somos.html" class="text-decoration-none text-dark">Quem Somos</a>

                </div>

                <div class="col-12 col-md-4 text-center text-md-right">
                    <a href="#" class="text-decoration-none text-dark">Contato:</a><br>
                    Email:<a href="mailto:email@dominio.com" class="text-decoration-none text-dark">daemaci@gmail.com
                    </a>
                    <img src="img/o-email.png"><br>
                    Telefone:<a href="phone:(51)99971-5674" class="text-decoration-none text-dark">(51)99971-5674</a>
                    <img src="img/bolha-de-bate-papo.png">
                </div>
            </div>
        </div>

    </footer>

</body>

</html>