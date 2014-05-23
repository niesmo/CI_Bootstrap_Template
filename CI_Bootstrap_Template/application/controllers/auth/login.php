<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('html');
        $this->load->helper('form');
        $this->output->enable_profiler(TRUE);
    }
    
	public function index(){
        $data = array();
        $hearder = array();
        
        $header['title'] = "Login | Sign up";
        $data['postAction'] = "authenticate";
        
		$this->load->view('templates/head.php', $header);
		$this->load->view('templates/header.php');
		$this->load->view('auth/wrapper.php', $data);
		$this->load->view('templates/footer.php');
	}
    
    public function authenticate(){
        echo "In the authentication function ";
    }
    
    public function sign_up(){
        echo "Signing up the User";
    }
}

/* End of file login.php */
/* Location: ./application/controllers/auth/login.php */