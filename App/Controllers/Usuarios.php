<?php
class Usuarios extends Controller{
    public function cadastrar(){
       $formulario = filter_input_array(INPUT_POST,[
        'nome' => FILTER_SANITIZE_FULL_SPECIAL_CHARS, 
        'email'=> FILTER_SANITIZE_EMAIL, 
        'senha' => FILTER_DEFAULT,
        'confirmar_senha' =>FILTER_DEFAULT
       ]);

        $this->view('usuario/cadastro');
    }//fim da função cadastar
    public function login(){
        $formulario = filter_input_array(INPUT_POST,[
         'email'=> FILTER_SANITIZE_EMAIL,
         'senha' => FILTER_DEFAULT,
        ]);
 
         $this->view('usuario/login');
     }
     public function recuperar_senha(){
        $formulario = filter_input_array(INPUT_POST,[
         'email'=> FILTER_SANITIZE_EMAIL
        ]);
 
         $this->view('usuario/recuperar_senha');
     }
}//