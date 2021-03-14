<?php
    session_start();

    $usuarioAutenticado = false;
    $usuario_id = null;
    $tipo_perfil = null;

    $usuarios = [
        ['id' => 1, 'email' => 'adm@teste.com', 'senha' => '123', 'tipo_perfil' => 1],
        ['id' => 2, 'email' => 'user@teste.com', 'senha' => '123', 'tipo_perfil' => 1],
        ['id' => 3, 'email' => 'maria@teste.com', 'senha' => '123', 'tipo_perfil' => 2],
        ['id' => 4, 'email' => 'jose@teste.com', 'senha' => '123', 'tipo_perfil' => 2]
    ];

    foreach($usuarios as $item) {
        if($_POST['email'] == $item['email'] && $_POST['senha'] == $item['senha']) {
            $usuarioAutenticado = true;
            $usuario_id = $item['id'];
            $tipo_perfil = $item['tipo_perfil'];
        } 
    }

    if($usuarioAutenticado) {
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] =  $usuario_id;
        $_SESSION['tipo_perfil'] =  $tipo_perfil;
        header('Location: home.php');
    } else {
        $_SESSION['autenticado'] = 'NAO';
       header('Location: index.php?login=erro');
    }
?>