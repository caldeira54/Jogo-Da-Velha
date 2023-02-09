<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Jogador</title>
</head>
<body class="body">
    <?php
    require_once './dao/DAOJogador.php';
    require_once './dao/Conexao.php';
    require_once './modelo/Jogador.php';

    $obj = new Jogador();
    $dao = new DAOJogador();

    $nome = filter_input(INPUT_POST, 'nome');

    if ($nome) {
        $obj->setNome($nome);

        if ($dao->inclui($obj)) {
            echo '<script>
                    alert("Jogador cadastrado com sucesso!");
                    window.location.href = "./index.php";
                  </script>';
        } else {
            echo 'Deu alguma merda...';
        }
    } else {
        echo '<script>
                alert("Dados ausentes ou incorretos!");
                window.location.href = "./index.php";
              </script>';
    }
    ?>
</body>
</html>