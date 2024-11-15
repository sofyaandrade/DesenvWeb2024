<!--
    Esta é a primeira parte de um mecanismo de controle de sessão no PHP.
    Ele normalmente será constituído de uma parte inicial - estabelecer a sessão - e requisições subsequentes que irão buscar dados armazenados na sessão
    
    OBS: Por padrão o PHP (quando instalação default), armazena os dados de sessão em arquivo, conforme definido no PHP.INI na chave session.save_handler = files
    Mais informações podem ser obtidas em: http://php.net/session.save-handler
-->
<?php
    /* Etapa 1 - Tentar iniciar uma sessão e validar se ela já está estabelecida */
    session_start();

    /* Caso não exista o dado "usuário" na global $_SESSION então vamos criar */
    if(!isset($_SESSION['usuario'])) {
        /* Caso tenha sido enviado do cliente pelo método POST o identificador do usuário, então vamos armazenar ele na sessão */
        $_SESSION['usuario'] = 'user_name';

        echo "Sessão iniciada e usuário registrado.";
        echo '<a href="02_session_continua.php"> Cliqui aqui para continuar</a>';
    } else {
        echo "O seu identificador de sessão é: " . session_id()."<br>";
        echo '<a href="02_session_continua.php">Acessar</a>';
    }
?>