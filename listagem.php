<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilo.css">
    <title>Listagem dos Jogadores</title>
</head>

<body>
    <div class="tabela">
        <h1> Jogadores </h1>
        <table>
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

        <div class="botoes">
            <form action="./index.php">
                <button> Inicio </button>
            </form>
        </div>
    </div>
</body>

</html>