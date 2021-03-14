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
                        <h2>Consultar chamado</h2>
                    </header>

                    <?
                        $arquivo = fopen('../../help_desk_scripts/arquivo.txt', 'r');

                        while(!feof($arquivo)) {

                            $linha = fgets($arquivo);
                            $registros = explode('#', $linha);

                            if($_SESSION['tipo_perfil'] == 2) {
                                if($_SESSION['id'] != $registros[0])  {
                                    continue;
                                }
                            }
                    ?>

                    <div class="card">
                        <h3><?= $registros[1]?></h3>
                        <h4><?= $registros[2]?></h4>
                        <p><?= $registros[3]?></p>    
                    </div>
                            
                    <?      
                        } 
                        fclose($arquivo);
                    ?>
                    <div class="return">
                        <a href="home.php">Voltar</a>
                    </div>
                </div>
            </main>
        </div>

    </body>
</html>