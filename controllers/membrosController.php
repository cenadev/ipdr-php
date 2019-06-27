<?php
class membrosController extends Controller {
    public function index()
    {
        $data = array();

        $this->loadTemplate('membros', $data);
    }

    public function cadastrar(){
        echo 'Essa é a página de cadastro';
    }
}