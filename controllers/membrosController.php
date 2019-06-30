<?php
class membrosController extends Controller {
    public function index()
    {
        $data = array();

        $this->loadTemplate('membros', 'index', $data);
    }

    public function cadastrar(){

        $data = array();
        $this->loadTemplate('membros', 'cadastrar',$data);
    }
}