<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilo.css">
    <title>Definir Jogadores</title>
</head>

<body>
    <div class="div">
        <div class="retangulo">
            <div class="jogador">
                <label for="jogador1">Jogador 1</label>
                <select class="dados" name="jogador1" id="jogador1">
                    <?php
                    session_start();

                    require_once './dao/DAOJogador.php';
                    require_once './dao/Conexao.php';

                    $dao = new DAOJogador();
                    $lista = $dao->lista();

                    if ($lista) {
                        foreach ($lista as $l) {
                            echo '' . $_SESSION["jogador1"] ='' . '<option value="' . $l['idJogador'] . '">' . $l['nome'] . '</option>';
                        }
                    }
                    ?>
                </select>
            </div>

            <div>
                <label for="jogador2">Jogador 2</label>
                <select class="dados" name="jogador2" id="jogador2">
                    <?php
                    require_once './dao/DAOJogador.php';
                    require_once './dao/Conexao.php';

                    $dao = new DAOJogador();
                    $lista = $dao->lista();

                    if ($lista) {
                        foreach ($lista as $l) {
                            echo '' . $_SESSION["jogador2"] ='' . '<option value="' . $l['idJogador'] . '">' . $l['nome'] . '</option>';
                        }
                    }
                    ?>
                </select>
            </div>

            <div class="botoes">
                <form action="./tabuleiro.php">
                    <button> Jogar </button>
                </form>

                <form action="./index.php">
                    <button> Início </button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>