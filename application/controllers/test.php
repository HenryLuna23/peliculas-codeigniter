<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }//este es nuestro constructor  

	public function index()
	{
		$this->load->view('welcome_message',array('name'=>'Soy tester'));
	}

	public function key(){
		echo md5("peliculas");
	}
}