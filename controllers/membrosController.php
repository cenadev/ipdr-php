<?php
class membrosController extends Controller
{
    public $data;

    public function __construct()
    {
        $this->data = array();
        
    }
    public function index()
    {
        $membros = new Membros();
    
        $this->data['membros'] = $membros->getMembers();
        
        $this->loadTemplate('membros', $this->data);
    }

    public function cadastrar()
    {
        if (isset($_POST['nome'], $_POST['genero'], $_POST['dataNasc'], $_POST['nacionalidade'], $_POST['natalidade'], $_POST['email'], $_POST['identidade'], $_POST['orgaoEmissor'], $_POST['inputCPF'], $_POST['nomePai'], $_POST['paiVivo'], $_POST['paiEvangelico'], $_POST['paiIpdr'], $_POST['nomeMae'], $_POST['maeViva'], $_POST['maeEvangelica'], $_POST['maeIpdr'])) {
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
                    'inputCPF' => $_POST['inputCPF'],
                    'nomePai' => $_POST['nomePai'],
                    'paiVivo' => $_POST['paiVivo'],
                    'paiEvangelico' => $_POST['paiEvangelico'],
                    'paiIpdr' => $_POST['paiIpdr'],
                    'nomeMae' => $_POST['nomeMae'],
                    'maeViva' => $_POST['maeViva'],
                    'maeEvangelica' => $_POST['maeEvangelica'],
                    'maeIpdr' => $_POST['maeIpdr'],
                );
                //execução da query aqui

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
