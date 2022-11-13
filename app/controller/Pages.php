<?php
class Pages extends Controller {
    public function __construct(){

    }

    public function index() {
        $data = [
            'title' => 'Bienvenido a Langosta.school'
        ];

        $this->view('pages/index', $data);

    }

}
