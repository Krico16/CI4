<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Form extends Controller{

    function __construct() {
        parent::__construct();

        helper(['form','url']);

        $this->isLogged = $this->session->userdata('isLogged');
    }

    public function index()
    {
        if(! $this->validate([])){
            echo view('SignUp'.[
                'validation' => $this->validator
            ]);
        }else{
            echo view('success');
        }
    }

}