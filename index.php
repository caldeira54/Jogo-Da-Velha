<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="./css/estilo.css"> -->
    <title>Jogo da Velha</title>
</head>

<body class="bg-light">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <form action="./formCadastro.php">
                    <div class="container text-center">
                        <label for="texto" class="text-dark p-3"> Cadastrar um novo jogador </label>
                    </div>

                    <div class="container text-center">
                        <button class="btn btn-outline-dark"> Cadastrar </button>
                    </div>
                </form>
            </div>

            <div class="col">
                <form action="./formDefine.php">
                    <div class="container text-center">
                        <label for="texto" class="text-dark p-3"> Definir Jogadores </label>
                    </div>

                    <div class="container text-center">
                        <button class="btn btn-outline-dark"> Definir </button>
                    </div>
                </form>
            </div>

            <div class="col">
                <form action="./listagem.php">
                    <div class="container text-center">
                        <label for="texto" class="text-dark p-3"> Lista de Jogadores </label>
                    </div>

                    <div class="container text-center">
                        <button class="btn btn-outline-dark"> Listar </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>