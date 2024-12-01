<?php
class Paginas extends Controller {
    public function index() {
        $dados = [
            'titulo' => 'Pagina Inicial',
            'descricao' => 'Aula de PHP'
        ];
        $this->view('pagina/home', $dados);
    }

    public function sobre() {
        $dados = [
            'titulo' => 'Sobre nós...',
            'descricao' => 'Esta aula é sobre PHP orientado a objetos com MVC'
        ];
        $this->view('pagina/sobre', $dados);
    }

    public function categoria() {
        $dados = [
            'titulo' => 'Categoria',
            'descricao' => 'Esta página exibe categorias disponíveis no sistema.'
        ];
        $this->view('pagina/categoria', $dados);
    }

    public function artista() {
        $dados = [
            'titulo' => 'artista',
            'descricao' => 'Esta página exibe artistas disponíveis no sistema.'
        ];
        $this->view('pagina/artista', $dados);
    }

    public function obra() {
        $dados = [
            'titulo' => 'obra',
            'descricao' => 'Esta página exibe obras disponíveis no sistema.'
        ];
        $this->view('pagina/obra', $dados);
    }
    
}
?>
