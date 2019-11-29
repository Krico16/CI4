<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class Login extends Controller {

    public function __construct() {
        helper('form');
    }

    public function index() {
        if(! $this->validate([])){
            echo 
            view('Templates/head') .
            view('login',[
                'validation' => $this->validator
            ]) .
            view('Templates/foot');
        }else{
            echo view('Templates/head');
            echo view('User/Panel');
            echo view('Templates/foot'); 
        }
    }

    public function postLogin() {
        $session = \config\Services::session();
        print_r($_POST);
    }
    
}