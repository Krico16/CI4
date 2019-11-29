<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class Login extends Controller {

    protected $helpers = ['form','url'];

	/**
	 * Constructor.
	 */
	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------
		// E.g.:
		// $this->session = \Config\Services::session();
		$this->database = \Config\Database::connect();
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