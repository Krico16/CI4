<?php namespace App\Controllers;

use CodeIgniter\Controller;

// Iniciar sesion para autenticar
session_start();

class UserAuth extends Controller{

    /*
    public function __construct(){
        parent::__construct();
        $this->loadHelpers();
    }
    */


    public function index(){
        return view('log');
    }
}

