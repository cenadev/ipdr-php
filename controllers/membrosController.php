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
        if (isset($_POST['nome'], $_POST['genero'], $_POST['dataNasc'], $_POST['nacionalidade'], $_POST['natalidade'], $_POST['email'], $_POST['identidade'], $_POST['orgaoEmissor'], $_POST['inputCPF'])) {
            # code...
            $data = array();
            $data = array(
                'nome' => $_POST['nome'],
                'genero' => $_POST['genero'],
                'dataNasc' => $_POST['dataNasc'],
                'nacionalidade' => $_POST['nacionalidade'],
                'natalidade' => $_POST['natalidade'],
                'email' => $_POST['email'],
                'identidade' => $_POST['identidade'],
                'orgaoEmissor' => $_POST['orgaoEmissor'],
                'inputCPF' => $_POST['inputCPF']
            );
            
            echo json_encode($data);
            http_response_code(200);
            
        } else {
            http_response_code(500);
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
