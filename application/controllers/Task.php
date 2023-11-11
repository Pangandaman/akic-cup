<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	Class Task extends CI_Controller
	{


public function __construct() {
  parent::__construct();
  $this->load->model(array('users/users'));
}
	
public function add_employee()  {

  //redirect (); 
  $this->load->view('navigation/'.$this->session->userdata('type').'/mainnav/nav');
  $this->load->view('employee/'.$this->session->userdata('type').'/add');
  $this->load->view('footer/footer');

}
public function update_employee()  {

  //redirect (); 
  $this->load->view('navigation/'.$this->session->userdata('type').'/mainnav/nav');
  $this->load->view('employee/'.$this->session->userdata('type').'/update');
  $this->load->view('footer/footer');

}
public function add_officer()  {

  //redirect (); 
  $this->load->view('navigation/'.$this->session->userdata('type').'/nav');
  $this->load->view('student/'.$this->session->userdata('type').'/add');
  $this->load->view('footer/footer');

}


public function add_student()  {

  //redirect (); 
  $this->load->view('navigation/'.$this->session->userdata('type').'/nav');
  $this->load->view('student/'.$this->session->userdata('type').'/add');
  $this->load->view('footer/footer');

}

public function update_student()  {

  //redirect (); 
  $this->load->view('navigation/'.$this->session->userdata('type').'/nav');
  $this->load->view('student/'.$this->session->userdata('type').'/update');
  $this->load->view('footer/footer');

}


public function update_ssc()  {

  //redirect (); 
  $this->load->view('navigation/'.$this->session->userdata('type').'/nav');
  $this->load->view('ssc/'.$this->session->userdata('type').'/update');
  $this->load->view('footer/footer');

}

public function add_announcement()  {

  //redirect (); 
  $this->load->view('navigation/'.$this->session->userdata('type').'/nav');
  $this->load->view('announcements/'.$this->session->userdata('type').'/add');
  $this->load->view('footer/footer');

}

public function update_announcement()  {

  //redirect (); 
  $this->load->view('navigation/'.$this->session->userdata('type').'/nav');
  $this->load->view('announcements/'.$this->session->userdata('type').'/update');
  $this->load->view('footer/footer');

}

public function add_schedule()  {

  //redirect (); 
  $this->load->view('navigation/'.$this->session->userdata('type').'/nav');
  $this->load->view('schedules/'.$this->session->userdata('type').'/add');
  $this->load->view('footer/footer');

}

public function update_schedule()  {

  //redirect (); 
  $this->load->view('navigation/'.$this->session->userdata('type').'/nav');
  $this->load->view('schedules/'.$this->session->userdata('type').'/update');
  $this->load->view('footer/footer');

}

public function add_activity()  {

    //redirect (); 
    $this->load->view('navigation/'.$this->session->userdata('type').'/nav');
    $this->load->view('events/'.$this->session->userdata('type').'/add');
    $this->load->view('footer/footer');
  
  }


  public function update_activity()  {

    //redirect (); 
    $this->load->view('navigation/'.$this->session->userdata('type').'/nav');
    $this->load->view('events/'.$this->session->userdata('type').'/update');
    $this->load->view('footer/footer');
  
  }
  
  public function update_bracket()  {

    //redirect (); 
    $this->load->view('navigation/'.$this->session->userdata('type').'/nav');
    $this->load->view('tournaments/'.$this->session->userdata('type').'/update');
    $this->load->view('footer/footer');
  
  }
  

  public function update_bracketrank()  {

    //redirect (); 
    $this->load->view('navigation/'.$this->session->userdata('type').'/nav');
    $this->load->view('tournaments/'.$this->session->userdata('type').'/updaterank');
    $this->load->view('footer/footer');
  
  }
  
  public function update_participants()  {

    //redirect (); 
    $this->load->view('navigation/'.$this->session->userdata('type').'/nav');
    $this->load->view('events/'.$this->session->userdata('type').'/participants');
    $this->load->view('footer/footer');
  
  }
  

    public function updateScores() {
        // Check if it's an AJAX request
        if ($this->input->is_ajax_request()) {
            // Get the data sent from the frontend
            $scoreData = $this->input->post('scores');

            // TODO: Process the $scoreData (update scores in the database)

            // Send a response back to the frontend
            $response = array(
                'status' => 'success',
                'message' => 'Scores updated successfully.'
            );
            echo json_encode($response);
        } else {
            show_404(); // Handle non-AJAX requests (optional)
        }
    }

    // Function to clear scores
    public function clearScores() {
        // Check if it's an AJAX request
        if ($this->input->is_ajax_request()) {
            // TODO: Process the request to clear scores in the database

            // Send a response back to the frontend
            $response = array(
                'status' => 'success',
                'message' => 'Scores cleared successfully.'
            );
            echo json_encode($response);
        } else {
            show_404(); // Handle non-AJAX requests (optional)
        }
    }

    // Other controller methods...
}




