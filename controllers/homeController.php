<?php

class homeController extends Controller{
    public function index(){

        $membros = new Membros();
        $membros->setName('Cleison');
        echo "Meu nome é: ".$membros->getName();
    }
}