<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Obras</title>
    <link rel="stylesheet" type="text/css" href="<?=URL?>/Public/css/categoria3.css"/>
</head>
<body>

<!-- Cabeçalho -->
<header class="navbar">
    <div class="nav-links">
        <a href="<?=URL?>/pagina/obra">Artistas</a>
        <a href="<?=URL?>/pagina/artista">Obras</a>
        <a href="<?=URL?>/pagina/categoria">Artes</a>
    </div>
   
    <div class="search-container">
    <img src="<?=URL?>/images/lupa.png" alt="Lupa" class="icon-search">
        <input type="text" placeholder="Buscar..."/>
    </div>

    <div class="icon-container">
        <div class="icon-box"> <img src="<?=URL?>/images/chat.png" alt="Chat" class="icon"> </div>
        <div class="icon-box"> <img src="<?=URL?>/images/carrinho.png" alt="Carrinho" class="icon"> </div> 
        <div class="icon-box"> <img src="<?=URL?>/images/perfil.png" alt="Perfil" class="icon"> </div>
    </div>
</header>


<div class='borda'></div>
<div class="obra-container">
    <div class="obra-imagem">
        <img src="<?=URL?>/Public/images/calma-jornada.webp" alt="Placeholder">
    </div>
    <div class="obra-info">
        <h2>A calma jornada</h2>
        <p id="descricao-curta">
            
<!-- Página -->
<div class='borda'></div>


            É uma obra de arte digital inspirada nas paisagens do Studio Ghibli, famoso estúdio de animação japonês conhecido...
            <span class="leia-mais" onclick="expandirTexto()">Leia mais.</span>
        </p>
        <p id="descricao-completa" style="display: none;">
            É uma obra de arte digital inspirada nas paisagens do Studio Ghibli, famoso estúdio de animação japonês conhecido por suas belas e encantadoras paisagens em filmes como "A Viagem de Chihiro" e "Meu Vizinho Totoro".
        </p>
        <p><strong>Preço:</strong> R$ 15,00</p>
        <p><strong>Autor:</strong> Caio Fonzinni</p>
    </div>
</div>

<div class="comentarios">
    <h3>Comentários</h3>
    <div id="lista-comentarios">
        <!-- Comentários existentes -->
        <div class="comentario">
            <div class="icon"></div>
            <p>A obra digital da paisagem é simplesmente deslumbrante! A combinação de cores e detalhes cria uma atmosfera incrivelmente realista. Sinto-me transportado para esse lugar.</p>
        </div>
    </div>
    <!-- Formulário para novo comentário -->
    <form class="form-comentario" onsubmit="adicionarComentario(event)">
        <input type="text" id="novo-comentario" placeholder="Digite seu comentário...">
        <button type="submit">Comentar</button>
    </form>
</div>
<script>
    // Função para expandir o texto
    function expandirTexto() {
        document.getElementById('descricao-curta').style.display = 'none';
        document.getElementById('descricao-completa').style.display = 'block';
    }

    // Função para adicionar um novo comentário
    function adicionarComentario(event) {
        event.preventDefault(); // Evita o envio do formulário

        const listaComentarios = document.getElementById('lista-comentarios');
        const novoComentarioTexto = document.getElementById('novo-comentario').value;

        if (novoComentarioTexto.trim() !== "") {
            const novoComentario = document.createElement('div');
            novoComentario.className = 'comentario';
            novoComentario.innerHTML = `
                <div class="icon"></div>
                <p>${novoComentarioTexto}</p>
            `;

            listaComentarios.appendChild(novoComentario);
            document.getElementById('novo-comentario').value = ''; // Limpa o campo de entrada
        }
    }
</script>


<!-- Rodapé -->
<footer class="rodape">
    <p>&copy; 2024 Galeria - Integrantes: Adriano, Antonio, Alliny, Ana Júlia e Victória</p>
</footer>

<script src="<?=URL?>/Public/js/script.js"></script>
</body>
</html>