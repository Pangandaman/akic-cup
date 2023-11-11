<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	Class Cup extends CI_Controller
	{


public function __construct() {
  parent::__construct();
  $this->load->model(array('users/users'));
}
	
public function view_cups()  {

  //redirect (); 
  
  $this->load->view('navigation/'.$this->session->userdata('type').'/mainnav/nav');
  $this->load->view('cup/list');
  $this->load->view('footer/footer');

}

public function view_previous_results()  {

  //redirect (); 
  $this->load->view('navigation/'.$this->session->userdata('type').'/mainnav/nav');
  $this->load->view('cup/results_id');
  $this->load->view('footer/footer');

}


}
?>