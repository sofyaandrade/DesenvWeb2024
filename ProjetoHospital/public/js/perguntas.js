document.getElementById('proxPergunta').addEventListener('click', function() {
    let ultimaPerguntaId = 0; // Inicialmente começa com o ID 1, ou pode ser dinâmico

    // Fazer uma requisição AJAX para pegar a próxima pergunta
    fetch(`../getPerguntas.php?ultimo_id=${ultimaPerguntaId}`)
        .then(response => response.json())
        .then(data => {
            if (data && data.texto) {
                // Atualizar a pergunta e o último ID
                document.getElementById('pergunta').textContent = data.texto;
                ultimaPerguntaId = data.id;  // Atualiza o último ID
            } else {
                document.getElementById('pergunta').textContent = "Não há mais perguntas!";
            }
        })
        .catch(error => console.error('Erro ao buscar a pergunta:', error));
});


// Função para carregar a pergunta no formulário de edição
function editarPergunta(id, texto) {
    document.getElementById('pergunta_id').value = id;
    document.getElementById('texto_pergunta').value = texto;
}


