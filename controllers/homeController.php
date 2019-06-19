<?php

class homeController extends Controller{
    public function index(){

        //instancia do model
        $membros = new Membros();
        $membros->setName('Cleison');

        //todos os dados passados em um array
        $data = array(
            'name' => $membros->getName()
        );

        //metodo que carrega a view
        $this->loadTemplate('home', $data);
    }
}