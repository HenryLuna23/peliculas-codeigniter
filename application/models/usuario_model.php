<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {

    public $variable;

    public function __construct(){
        parent::__construct();
    }//este es nuestro constructor  

    //funcion para el logueo
    public function login($username,$password){

        //si nos devuelve una fila es porque existe
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $resp= $this->db->get('usuarios');
        if ($resp->num_rows()>0) {
            return true;
        } else {
            return false;
        }
        
    }
    
}