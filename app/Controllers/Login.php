<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Login extends Controller {


    public function index() {
        helper(['form','url']);

        if(! $this->validate([])){
            echo view('Templates/head');
            echo view('login',[
                'validation' => $this->validator
            ]);
            echo view('Templates/foot');    
        }else{
            echo view('Templates/head');
            echo view('User/Panel');
            echo view('Templates/foot'); 
        }
    }

    public function loginForm() {
        echo view('Templates/head');
        echo view('User/Panel');
        echo view('Templates/foot');
    }
    
}