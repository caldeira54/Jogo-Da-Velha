<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilo.css">
    <title>Listagem dos Jogadores</title>
</head>

<body>
    <div class="container text-center">
        <h1> Jogadores </h1>
        <table class="table table-success table-striped">
            <tr>
                <th> ID </th>
                <th> Nome </th>
            </tr>

            <?php
            require_once './dao/DAOJogador.php';
            require_once './dao/Conexao.php';

            $dao = new DAOJogador();
            $lista = $dao->lista();

            foreach ($lista as $v) {
                echo '<tr>';

                echo '<td>' . $v['idJogador'] . '</td>';
                echo '<td>' . $v['nome'] . '</td>';

                echo '</tr>';
            }
            ?>
        </table>

        <div class="container text-center">
            <form action="./index.php">
                <button class="btn btn-outline-dark"> Inicio </button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>