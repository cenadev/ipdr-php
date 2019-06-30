<?php
class aboutController extends Controller {
    public function index(){
        $data = [];
        $this->loadTemplate('about', $data);
    }
}