<?php namespace App\Controllers;

class Login extends BaseController {
    public function index(){
        \helper(['form','url']);
        echo view('Templates/head');
        echo view('login');
    }

    public function login_post(){
        //$username = post
    }

    public function logout(){
        return view('welcome_message');
    }
}