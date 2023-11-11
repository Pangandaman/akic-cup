<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	Class LoginController extends CI_Controller
	{


public function __construct() {
  parent::__construct();
  $this->load->model(array('users/users'));
}
		public function index()
		{
      
			$this->load->view('login');

		}
 
        public function login()
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
        
            if ($username == "" || $password == "") {
                $this->session->set_flashdata('error', 'Enter username and password.');
                redirect('login'); // Redirect back to the login page
            } else {
                if ($this->users->is_exist(array('username' => $username, 'is_blocked' => 0))) {
                    if ($this->users->check_credentials($username, $password)) {
                        $this->users->create_sessions($username);
                    } else {
                        $this->session->set_flashdata('error', 'Invalid credentials.');
                        redirect('login'); // Redirect back to the login page
                        return; // Halt further execution
                    }
                } else {
                    $this->session->set_flashdata('error', 'Invalid credentials.');
                    redirect('login'); // Redirect back to the login page
                    return; // Halt further execution
                }
            }
            if ($this->session->userdata('type') == 'admin') {
                $this->load->view('navigation/'.$this->session->userdata('type').'/mainnav/nav');
                $this->load->view('dashboard/'.$this->session->userdata('type').'/admin-main');
                $this->load->view('footer/footer');
                
            } else if ($this->session->userdata('type') == 'adviser') {
                $house = $this->session->userdata('house'); // Assuming the house information is stored in the session or fetched from the database.
                $this->load->view('navigation/'.$this->session->userdata('type').'/nav');
                 $this->load->view('house/khayyam');    //.$house);
                $this->load->view('footer/footer');
            } else {
                $this->load->view('navigation/'.$this->session->userdata('type').'/nav');
                $this->load->view('dashboard/'.$this->session->userdata('type').'/home');
                $this->load->view('footer/footer');
            }   
            
        }

    public function logout() {
      $this->load->model('users/Users', '', true);
      $this->users->destroy_sessions();
      $this->load->view('login');

    
    }
 

}
?>