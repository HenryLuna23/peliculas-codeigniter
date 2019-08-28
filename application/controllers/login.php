<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }//este es nuestro constructor  

	public function index()
	{

        if(isset($_POST['password'])){
            $this->load->model('usuario_model');
            if($this->usuario_model->login($_POST['username'],md5($_POST['password']))){
                $this->session->set_userdata('username',$_POST['username']);
                $this->load->view('login');
                if($this->session->userdata('username')){
                    redirect('welcome');
                }
            }else{
                redirect('login');
            }
        }


		$this->load->view('login');
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('login');
    }
    
}