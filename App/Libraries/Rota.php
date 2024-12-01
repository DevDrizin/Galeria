<?php
class Rota {
    private $controlador = "Paginas";
    private $metodo = 'index';
    private $parametros = [];

    public function __construct() {
        // Obtém a URL ou define um array vazio se não houver URL
        $url = $this->url() ? $this->url() : [0];

        // Verifica se o controlador existe
        if (file_exists('../app/Controllers/' . ucwords($url[0]) . '.php')) {
            $this->controlador = ucwords($url[0]);
            unset($url[0]);
        }

        // Inclui o arquivo do controlador e instancia o controlador
        require_once '../app/Controllers/' . $this->controlador . '.php';
        $this->controlador = new $this->controlador;

        // Verifica se o método existe no controlador
        if (isset($url[1])) {
            if (method_exists($this->controlador, $url[1])) {
                $this->metodo = $url[1];
                unset($url[1]);
            }
        }

        // Pega os parâmetros restantes da URL
        $this->parametros = $url ? array_values($url) : [];

        // Chama o controlador, o método e passa os parâmetros
        call_user_func_array([$this->controlador, $this->metodo], $this->parametros);
    }

    // Método para processar e limpar a URL
    private function url() {
        $url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
        if (isset($url)) {
            $url = trim(rtrim($url, '/'));
            $url = explode('/', $url);
            return $url;
        }
    }
}
?>
