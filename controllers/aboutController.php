<?php
class aboutController extends Controller {
    public function index(){
        $data = [];
        $this->loadView('about', $data);
    }
}