<?php
class membrosController extends Controller
{
    public function index()
    {
        $data = array();

        $this->loadTemplate('membros', 'index', $data);
    }

    public function cadastrar()
    {

        $data = array();
        $this->loadTemplate('membros', 'cadastrar', $data);
    }
    public function alterar()
    {

        $data = array();
        $this->loadTemplate('membros', 'alterar', $data);
    }
    public function excluir()
    {

        $data = array();
        $this->loadTemplate('membros', 'excluir', $data);
    }
}
