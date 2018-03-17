<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
		$this->load->view('welcome_message');
	}
	/**
	 *
	 * Maps to the following URL 
	 * 		http://test/index.php/login_page
	 */
	public function todo()
	{
		if(!($this->input->post()))
			$this->load->view('login_page');
		else
		{
			$this->load->database();
			if($this->input->post()){
				$err = NULL;
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				$credentials = array('username'=>$username);
				$this->load->model('TodoModel');
				$data['results'] = $this->TodoModel->checkLogin($credentials);
				if(!$data['results']){
					$data['error'] = "Sorry the username you entered is not found";
					$this->load->view('login_page',$data);
				} else {
					if($password == $data['results'][0]->password){
						// Start the session
						session_start();
						// echo "The password you entered is correct";
						// $this->registerSessionForUser($credentials);
						// $this->load->view('todo_home');
						// $this->test();
					}	
					else{
						$err['message'] = "The password you enterd is wrong";
						$this->load->view('login_page',$err);
					}
				}
			}
			 else {
				// $this->load->view('');
				$this->load->view('	login_page');
			}
		}	
	}
	public function todoLogin()
	{
	    
	}
	public function registerSessionForUser($credentials){
		$username = $credentials['username'];
		$this->session->set_userdata('user_name',$username);

	}
	public function test(){
		var_dump($_SESSION);
	}
}