<?
    require_once('valida_acesso.php');
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>App Help Desk</title>

        <!-- Stylesheet -->
        <link rel="stylesheet" type="text/css" href="css/style.css">

    </head>
    <body>

        <header>
            <div class="container">
                <div id="cabecalho">
                    <a href="#">
                        <img src="./img/logo.png" width="40" height="40" alt="logo app help desk">
                        <h1>App Help Desk</h1>
                    </a>
                    <nav>
                        <ul>
                            <li>
                                <a href="logoff.php">Sair</a>
                            </li>
                        </ul>
                    </nav> 
                </div>
            </div>
        </header>

        <div class="container">
            <main class="main-contents">
                <div class="background-contents">
                    <header class="header-contents">
                        <h2>Abertura de chamado</h2>
                    </header>
                    <form action="registra_chamado.php" method="post">
                        <div class="forms">
                            <label for="titulo">Título</label>
                            <input type="text" name="titulo" placeholder="Título">
                            <label for="categoria">Categoria</label>
                            <select name="categoria">
                                <option>Criação Usuário</option>
                                <option>Impressora</option>
                                <option>Hardware</option>
                                <option>Software</option>
                                <option>Rede</option>
                            </select>
                            <label for="descricao">Descrição</label>
                            <textarea name="descricao"></textarea>
                        </div>
                        <div class="forms-2">
                            <a href="home.php">Voltar</a>
                            <button type="submit" value="abrir"> 
                                Abrir
                            </button>
                        </div>
                    </form>
                </div>
            </main>
        </div>

    </body>
</html>