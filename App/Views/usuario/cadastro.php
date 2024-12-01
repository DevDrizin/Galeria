<link rel="stylesheet" type="text/css" href="<?=URL?>/public/css/login1.css"/>

<!-- Formulário de Cadastro -->
<h1>Crie sua conta</h1>
<div class="formulario-borda">
  <div class="formulario-container">
      <form name="cadastrar" method="POST" 
      action="<?=URL?>/pagina/categoria" class="formulario-form">
          <div class="formulario-grupo">
              <label for="nome">Nome de Usuário: <sup class="formulario-obrigatorio">*</sup></label>
              <input type="text" placeholder="Username" id="nome" class="formulario-input" required>
          </div>
          <div class="formulario-grupo">
              <label for="email">Email: <sup class="formulario-obrigatorio">*</sup></label>
              <input type="email" placeholder="Seu Email" name="email" id="email" class="formulario-input" required>
          </div>
          <div class="formulario-grupo">
              <label for="senha">Senha: <sup class="formulario-obrigatorio">*</sup></label>
              <input type="password" placeholder="Sua Senha" name="senha" id="senha" class="formulario-input" required>
          </div>
          <div class="formulario-grupo">
              <label for="confirma_senha">Confirma Senha: <sup class="formulario-obrigatorio">*</sup></label>
              <input type="password" placeholder="Confirme Sua Senha" name="confirma_senha" id="confirma_senha" class="formulario-input" required>
          </div>
          <div class="formulario-linhas">
              <div class="formulario-coluna">
                  <input type="submit" value="Crie Sua Conta" class="formulario-botao">
              </div>
              <div class="formulario-coluna">
                  <a href="<?=URL?>/usuarios/login" class="formulario-link">Você tem uma conta? Faça login</a>
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
