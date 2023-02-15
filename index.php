<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilo.css">
    <title>Jogo da Velha</title>
</head>

<body>
    <div class="div">
        <form action="./formCadastro.php">
            <div class="retangulo">
                <div class="label">
                    <label for="texto"> Cadastrar um novo jogador </label>
                </div>

                <button> Cadastrar </button>
            </div>
        </form>
        
        <form action="./formDefine.php">
            <div class="retangulo">
                <div class="label">
                    <label for="texto"> Definir Jogadores </label>
                </div>

                <button> Definir </button>
            </div>
        </form>

        <form action="./listagem.php">
            <div class="retangulo">
                <div class="label">
                    <label for="texto"> Lista de Jogadores </label>
                </div>

                <button> Listar </button>
            </div>
        </form>
    </div>
</body>

</html>