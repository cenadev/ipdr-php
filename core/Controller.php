<?php
class Controller {
    public function loadView($viewName, $viewData = array()){
    
        extract($viewData);
        include 'views/'.$viewName.'.php';
    }
    public function loadTemplate($viewName, $viewData = array()){
        include 'views/template.php';
    }
    public function loadViewInTemplate($viewName, $viewAction, $viewData = array()){
        extract($viewData);
        include 'views/'.$viewName.'.php';
    }
    public function loadViewActionInTemplate($viewName, $viewAction, $viewData) {
        extract($viewData);
        include 'views/'.$viewName.'/'.$viewAction.'.php';
    }
}