<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação Hospitalar - Comentário</title>
    <link rel="stylesheet" href="../../../public/css/style.css">
    <link rel="stylesheet" href="avaliacao.css">
    <script src="../../../public/js/script.js"></script>
</head>
<body>
    <div class="content-container">
        <div class="header">
            <div class="logo"><img src="../../assets/logo.png" alt=""></div>
            <div class="title">Hospital Regional do Alto Vale do Itajaí</div>
            <button class="gear-button" onclick="goToLogin()">
                <img src="gear-icon.png" alt="Engrenagem" />
            </button>
        </div>
            

        <div class="main">
            <div class="question">Você gostaria de deixar um comentário sobre o nosso atendimento?</div>
                <div class="">
                    <textarea class="comment-box" placeholder="Escreva seu comentário aqui (opcional)"></textarea>
                </div>
                <div class="anonymous">Sua avaliação espontânea é anônima, nenhuma informação pessoal é solicitada ou armazenada.</div>
            </div>
            <button class="next-button" onclick="simularEnviar()">Enviar</button>
        </div>
    </div>
</body>
</html>
