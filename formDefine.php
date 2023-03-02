<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilo.css">
    <title>Definir Jogadores</title>
</head>

<body>
    <div class="div">
        <div class="">
            <div>
                <form action="tabuleiro.php" method="POST">
                    <label for="jogador1">Jogador 1</label>
                    <select class="form-select" name="jogador1" id="jogador1">
                        <?php
                        session_start();

                        require_once './dao/DAOJogador.php';
                        require_once './dao/Conexao.php';

                        $dao = new DAOJogador();
                        $lista = $dao->lista();

                        if ($lista) {
                            foreach ($lista as $l) {
                                echo '' . $_SESSION["jogador1"] = '' . '<option value="' . $l['nome'] . '">' . $l['nome'] . '</option>';
                            }
                        }
                        ?>
                    </select>

                    <br>

                    <label for="jogador2">Jogador 2</label>
                    <select class="form-select" name="jogador2" id="jogador2">
                        <?php
                        require_once './dao/DAOJogador.php';
                        require_once './dao/Conexao.php';

                        $dao = new DAOJogador();
                        $lista = $dao->lista();

                        if ($lista) {
                            foreach ($lista as $l) {
                                echo '' . $_SESSION["jogador2"] = '' . '<option value="' . $l['nome'] . '">' . $l['nome'] . '</option>';
                            }
                        }
                        ?>
                    </select>

                    <div class="button">
                        <button> Jogar </button>
                    </div>
                </form>
            </div>

            <div class="botoes">
                <form action="./index.php">
                    <button> Início </button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>