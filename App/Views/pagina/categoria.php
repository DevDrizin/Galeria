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
        <img src="<?=URL?>/Public/images/lupa.png" alt="Lupa" class="icon-search">
        <input type="text" placeholder="Buscar..."/>
    </div>
    
    <div class="icon-container">
        <div class="icon-box"> 
            <img src="<?=URL?>/Public/images/chat.png" alt="Chat" class="icon"> 
        </div>
        <div class="icon-box"> 
            <img src="<?=URL?>/Public/images/carrinho.png" alt="Carrinho" class="icon"> 
        </div> 
        <div class="icon-box"> 
            <img src="<?=URL?>/Public/images/perfil.png" alt="Perfil" class="icon"> 
        </div>
    </div>
</header>

<!-- Página -->
<div class='borda'></div>
<div class="preferences">
       <span>Preferências:</span>
        <div class="tag">Publicidade <span class="close-btn" onclick="removeTag(this)">✖</span></div>
        <div class="tag">Ilustrações <span class="close-btn" onclick="removeTag(this)">✖</span></div>
        <div class="tag">Logotipos <span class="close-btn" onclick="removeTag(this)">✖</span></div>
        <div class="tag">Digital <span class="close-btn" onclick="removeTag(this)">✖</span></div>
        <div class="tag">À mão <span class="close-btn" onclick="removeTag(this)">✖</span></div>
    </div>

<div class="gallery">
    <div class="gallery-item circle">
        <img src="<?=URL?>/Public/images/artecircle2.png" alt="Placeholder">
    </div>
    <div class="gallery-item rectangle tall">
        <img src="<?=URL?>/Public/images/artetall2.jpeg" alt="Placeholder">
    </div>
    <div class="gallery-item rectangle wide">
        <img src="<?=URL?>/Public/images/artewide4.jpeg" alt="Placeholder">
    </div>
    <div class="gallery-item rectangle wide">
        <img src="<?=URL?>/Public/images/artewide2.jpeg" alt="Placeholder">
    </div>
    <div class="gallery-item rectangle tall">
        <img src="<?=URL?>/Public/images/artetall.jpeg" alt="Placeholder">
    </div>
    <div class="gallery-item square">
        <img src="<?=URL?>/Public/images/calma-jornada.webp" alt="Placeholder">
    </div>
    <div class="gallery-item rectangle wide">
        <img src="<?=URL?>/Public/images/artewide.jpeg" alt="Placeholder">
    </div>
    <div class="gallery-item circle">
        <img src="<?=URL?>/Public/images/autorretrato.jpg" alt="Placeholder">
    </div>
    <div class="gallery-item square">
        <img src="<?=URL?>/Public/images/arte1.png" alt="Placeholder">
    </div>
    <div class="gallery-item rectangle wide">
        <img src="<?=URL?>/Public/images/artewide3.png" alt="Placeholder">
    </div>
    <div class="gallery-item circle">
        <img src="<?=URL?>/Public/images/artecircle3.png" alt="Placeholder">
    </div>
    <div class="gallery-item square">
        <img src="<?=URL?>/Public/images/arte3.png" alt="Placeholder">
    </div>
    <div class="gallery-item rectangle wide">
        <img src="<?=URL?>/Public/images/artewide.jpeg" alt="Placeholder">
    </div>
    <div class="gallery-item square">
        <img src="<?=URL?>/Public/images/salvador-dali.jpg" alt="Placeholder">
    </div>
    <div class="gallery-item rectangle tall">
        <img src="<?=URL?>/Public/images/monalisa.jpg" alt="Placeholder">
    </div>
    <div class="gallery-item circle">
       <img src="<?=URL?>/Public/images/artecircle.jpeg" alt="Placeholder">
    </div>
    <div class="gallery-item square">
        <img src="<?=URL?>/Public/images/arte2.jpeg" alt="Placeholder">
    </div>
    <div class="gallery-item rectangle tall">
        <img src="<?=URL?>/Public/images/artetall3.png" alt="Placeholder">
    </div>
    <div class="gallery-item rectangle wide">
        <img src="<?=URL?>/Public/images/santa-ceia.jpg" alt="Placeholder">
    </div>
    <div class="gallery-item rectangle tall">
        <img src="<?=URL?>/Public/images/artetall.png" alt="Placeholder">
    </div>
    <div class="gallery-item circle">
        <img src="<?=URL?>/Public/images/artecircle4.jpeg" alt="Placeholder">
    </div>

</div>

<!-- Rodapé -->
<footer class="rodape">
    <p>&copy; 2024 Galeria - Integrantes: Adriano, Antonio, Alliny, Ana Júlia e Victória</p>
</footer>

<script src="<?=URL?>/Public/js/script.js"></script>
</body>
</html>
