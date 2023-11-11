<?php
defined('BASEPATH') OR exit('No direct script access allowed');


    class Employees extends CI_Controller {

        public function employeeList() 
        {
            $this->load->view('navigation/'.$this->session->userdata('type').'/mainnav/nav');
                  $this->load->view('employees/list');
            $this->load->view('footer/footer');
              }
          
          
    }





