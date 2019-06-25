<?php

class homeController extends Controller{
    public function index(){

        //todos os dados passados em um array
        $data = array();

        //metodo que carrega a view
        $this->loadTemplate('home', $data);
    }
}