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
        if ($_POST['nome'] && $_POST['dataNasc'] && $_POST['nacionalidade'] && $_POST['natalidade'] && $_POST['email'] && $_POST['identidade'] && $_POST['orgaoEmissor'] && $_POST['inputCPF']) {
            # code...
            
        }
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
