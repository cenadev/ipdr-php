<?php

class Core {
    private $currentController;
    private $currentAction;
    
    public function run(){
        $url = substr($_SERVER['PHP_SELF'], 10);

        if(!empty($url)){
            echo $url;
        }else{
            $this->currentController = 'homeController';
            $this->currentAction = 'index';
        }
    }
}