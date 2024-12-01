<?php
include "./../App/configuracao.php";
include "./../App/autoload.php";

/*
$db = new Database;
$db->query("SELECT * FROM posts");
foreach($db->resultados() as $post){
    echo $post->titulo .' | '. $post->texto.'<br>';
}

//consultar um valor no banco
$db->query("SELECT * FROM posts ORDER BY id DESC");
$db->resultado();
echo $db->resultado()->titulo;

//deletar informação do banco
$id = 6;
$db- >query("DELETE FROM posts WHERE id = :id");
$db->bind(":id",$id);

$db->executa();
echo '<hr> Total Resultados: '.$db->totalResuldados();

//atualizar o banco
date_default_timezone_set('America/Cuiaba');
$id = 2;
$usuarioId = 12;
$titulo = 'Titulo Editado';
$texto = 'Texto editado';
$criadoEm = date('Y-m-d H:i:s');

$db->query("UPDATE posts SET usuario_id= :usuario_id, titulo= :titulo, texto=:texto, criado_em=:criado_Em WHERE id=:id");

$db->bind(':id',$id);
$db->bind(':usuario_id',$usuarioId);
$db->bind(':titulo',$titulo);
$db->bind(':texto',$texto);
$db->bind(':criadoEm',$criadoEm);

$db->executa();
//echo '<hr>Total resultados: '.$db->totalResultados(); 

//inserir dados no banco
$usuarioId = 8;
$titulo = "Linguagem de Programação";
$texto = "Teste de algoritmos";

$db->query("INSERT INTO posts (usuario_id, titulo, texto) VALUES (:usuario_id, :titulo, :texto)");

$db->bind(":usuario_id",$usuarioId);
$db->bind(":titulo",$titulo);
$db->bind("texto",$texto);

$db->executa();

echo '<hr>Total Resultados: '.$db->totalResuldados();
echo '<hr>Último ID: '.$db->ultimoIdInserido();

*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=APP_NOME?></title>
    <!-- Tirei o link dos CSSs aqui porque se chamar aqui vai 
     ficar pra todas as páginas. Deixei cada um no php 
     específico da página -->
    <link rel="stylesheet" type="text/css" href="<?=URL?>/public/bootstrap/css/bootstrap.css"/>
</head>
<body>
<!-- Incluindo o VLibras -->
    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>

    <?php
    include "../App/Views/header.php";
    $rotas = new Rota();
   // $rotas->url();
    ?>
    <script src="<?=URL?>/public/bootstrap/js/bootstrap.js"></script>
    <script src="<?=URL?>/public/js/query.js"></script>
    <script src="<?=URL?>/public/js/script.js"></script>
    
</body>
</html>