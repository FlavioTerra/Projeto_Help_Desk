
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
                </div>
            </div>
        </header>

        <div class="container">
            <form id="form-login" action="valida_login.php" method="post">
                <img src="./img/perfil.png" alt="Imagem pefil" height="100" width="100">
                <div id="login">
                    <input type="email" name="email" placeholder="Email" id="email">
                    <input type="password" name="senha" placeholder="Password" id="senha">

                    <?
                       if(isset($_GET['login']) && $_GET['login'] == 'erro') {

                    ?>
                        <div style="color: #FF4500;">
                            Usuário ou senha inválido(s).
                        </div>
                    <?
                       }
                    ?>

                    <?
                       if(isset($_GET['login']) && $_GET['login'] == 'erro2') {

                    ?>
                        <div style="color: #FF4500;">
                            Faça login antes de acessar as páginas
                        </div>
                    <?
                       }
                    ?>
                    <button type="submit" value="logar">
                        Login
                    </button>
                </div>
            </form>
        </div>

    </body>
</html>