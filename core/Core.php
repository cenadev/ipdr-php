<?php

class Core {
    private $currentController;
    private $currentAction;
    
    public function run(){
        $url = substr($_SERVER['PHP_SELF'], 19);

        if(!empty($url)){
            $url = explode('/', $url);
            array_shift($url);

            $this->currentController = $url[0].'Controller';
            if(isset($url[1])){
                $this->currentAction = $url[1];
            } else{
                $this->currentAction = 'index';
            }

        } else {
            $currentController = 'homeController';
            $currentAction = 'index';
        }
        require_once 'core/Controller.php';
        
        $c = new $currentController();
        $c->$currentAction();
    }
}