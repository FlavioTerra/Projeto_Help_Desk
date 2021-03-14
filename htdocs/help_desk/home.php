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
                        <h2>Menu</h2>
                    </header>
                    <div class="forms-2">
                        <a href="abrir_chamado.php">
                            <img src="./img/formulario_abrir_chamado.png" alt="imagem abrir chamado" height="75" width="75">
                        </a>
                        <a href="consultar_chamado.php">
                            <img src="./img/formulario_consultar_chamado.png" alt="imagem consultar chamado" height="75" width="75">
                        </a>
                    </div>
                </div>
            </main>
        </div>

    </body>
</html>