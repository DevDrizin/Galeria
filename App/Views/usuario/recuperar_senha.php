<link rel="stylesheet" type="text/css" href="<?=URL?>/public/css/login1.css"/>

<!-- Formulário de Login -->
<h1>Recuperação de Senha</h1>
<div class="formulario-borda">
  <div class="formulario-container">
    <form action="<?=URL?>/pagina/categoria" method="POST" class="formulario-form">
      <p class="formulario-texto">Digite seu e-mail abaixo para receber instruções de recuperação de senha.</p>
      <div class="formulario-grupo">
        <label for="email">E-mail: <sup class="formulario-obrigatorio">*</sup></label>
        <input type="email" id="email" name="email" placeholder="Digite seu e-mail" class="formulario-input" required>
      </div>
      <div class="formulario-linhas">
        <div class="formulario-coluna">
          <button type="submit" class="formulario-botao">Enviar</button>
        </div>
        <div class="formulario-coluna">
          <a href="<?=URL?>/usuarios/login" class="formulario-link">Voltar ao login</a>
        </div>
      </div>
    </form>
  </div>
</div>


<!-- Aquelas 2 formas que tem no fundo no figma, mas não consegui fazer elas terem aquele formato esquisito -->
<div class="forma1"></div>
<div class="forma2"></div>

<!-- Rodapé -->
<footer class="rodape">
    <p>&copy; 2024 Galeria - Integrantes: Adriano, Antonio, Alliny, Ana Júlia e Victória</p>
</footer>