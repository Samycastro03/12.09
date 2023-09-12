<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</head>

<body class="bg-body-tertiary">

    <div class="container text-center bg-body-tertiary">

        <div class="row">
            <! a tag div class="col" foi utilizada para alinhamento do site em colunas ->
                <div class="col-1">
                    &nbsp;
                </div>

                <div class="col bg-primary">

                    <!implementando o menu ->
                        <nav class="navbar bg-primary navbar-expand-lg" data-bs-theme="dark">
                            <div class="container-fluid">
                                <a class="navbar-brand" href="#">Sistema WEB</a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <div class="navbar-nav">
                                        <a class="nav-link active" aria-current="page" href="index.php"> Cadastrar</a>
                                        <a class="nav-link" href="consultar.php">Consultar</a>
                                    </div>
                                </div>
                            </div>
                        </nav>
                </div>

                <div class="col-1">
                    &nbsp;
                </div>
        </div>

        <div class="row">
            <div class="col-1">
                &nbsp;
            </div>

            <div class="col bg-white">
                &nbsp;
            </div>

            <div class="col-1">
                &nbsp;
            </div>
        </div>

        <div class="row">
            <div class="col-1">

                &nbsp;
            </div>


            <div class="col bg-white">
                <p class="text-start fs-5"> <b>Cadastrar - Agendamentos de potenciais clientes</b></p>
                <p class="text-start fs-6">Sistema utilizado para agendamento de serviços.</p>
                <p>

                    <!implementando o formulario ->
                        <form method="POST" action="controller/ControllerCadastro.php">
                            <div class="mb-3 text-start">
                                <!campo de digitaçao do nome ->
                                    <p class="text-start">Nome:</p>
                                    <input type="text" name="nome" id="nome" class="form-control">
                            </div>

                            <div class="mb-3 text-start">
                                <! campo para digitar o telefone ->
                                    <p class="text-start">Telefone: </p>
                                    <input type="number" name="telefone" id="telefone" class="form-control"
                                        id="exampleFormControlInput1" placeholder="(xx)xxxxx-xxxx">
                            </div>

                            <div class="mb-3 text-start">
                                <!elemento para selecionar a origem ->
                                    <p class="text-start">Origem:</p>
                                    <select class="form-select" name="origem" id="origem">
                                        <option selected>Celular</option>
                                        <option value="Telefone fixo">Telefone fixo</option>
                                        <option value="WhatsApp">WhatsApp</option>
                                        <option value="Outros">Outros</option>
                                    </select>
                            </div>

                            <div class="mb-3 text-start">
                                <! elemento para selecionara data do contato ->
                                    <p class="text-start">Data do contato:</p>
                                    <input type="date" name="datadocontato" id="datadocontato" class="form-control"
                                        placeholder="xx/xx/xxxx">
                            </div>

                            <div class="mb-3 text-start">
                                <! campo de observação ->
                                    <p class="text-start">Observação: </p>
                                    <textarea class="form-control" name="observacao" id="observacao"
                                        style="height: 100px"></textarea>
                            </div>

                            <div class="mb-3 text-start">
                                <! botao cadastrar ->
                                    <input type="submit" class="btn-check" id="btn-check" autocomplete="off">
                                    <label class="btn btn-primary" for="btn-check">Cadastrar</label>
                            </div>
                        </form>
                </p>
            </div>

            <div class="col-1">
                &nbsp;
            </div>

        </div>
    </div>
</body>

</html>