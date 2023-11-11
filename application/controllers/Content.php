<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	Class Content extends CI_Controller
	{


public function __construct() {
  parent::__construct();
  $this->load->model(array('users/users'));
}
	
    public function view_dashboard()  {

              //redirect (); 
              $this->load->view('navigation/'.$this->session->userdata('type').'/nav');
              $this->load->view('dashboard/'.$this->session->userdata('type').'/home');
              $this->load->view('footer/footer');
    }

    public function view_manage()  {

      //redirect (); 
      $this->load->view('navigation/'.$this->session->userdata('type').'/mainnav/nav');
      $this->load->view('dashboard/'.$this->session->userdata('type').'/admin-main');
      $this->load->view('footer/footer');
}



    public function view_events()  {

      //redirect (); 
      $this->load->view('navigation/'.$this->session->userdata('type').'/nav');
      $this->load->view('events/events');
      $this->load->view('footer/footer');

}
 
public function view_employees()  {

  //redirect (); 
  $this->load->view('navigation/'.$this->session->userdata('type').'/mainnav/nav');
  $this->load->view('employee/list');
  $this->load->view('footer/footer');
}

public function view_error_page()  {

  //redirect (); 

  $this->load->view('error/page');
  $this->load->view('footer/footer');
}

public function view_about_us()  {

  //redirect (); 
  $this->load->view('navigation/'.$this->session->userdata('type').'/nav');
  $this->load->view('about/about_us');
  $this->load->view('footer/footer');
}




public function view_house_khayyam()  {

  //redirect (); 
  $this->load->view('navigation/'.$this->session->userdata('type').'/nav');
  $this->load->view('house/khayyam');
  $this->load->view('footer/footer');

}

public function view_house_burzjani()  {

  //redirect (); 
  $this->load->view('navigation/'.$this->session->userdata('type').'/nav');
  $this->load->view('house/burzjani');
  $this->load->view('footer/footer');

}

public function view_house_razi()  {

  //redirect (); 
  $this->load->view('navigation/'.$this->session->userdata('type').'/nav');
  $this->load->view('house/razi');
  $this->load->view('footer/footer');

}

public function view_house_haytham()  {

  //redirect (); 
  $this->load->view('navigation/'.$this->session->userdata('type').'/nav');
  $this->load->view('house/haytham');
  $this->load->view('footer/footer');

}

public function view_tabulations()  {

  //redirect (); 
  $this->load->view('navigation/'.$this->session->userdata('type').'/nav');
  $this->load->view('tabulations/tabulation');
  $this->load->view('footer/footer');

}


public function view_schedules()  {

  //redirect (); 
  $this->load->view('navigation/'.$this->session->userdata('type').'/nav');
  $this->load->view('schedules/schedule');
  $this->load->view('footer/footer');

}


public function view_generalguidelines()  {

  //redirect (); 
  $this->load->view('navigation/'.$this->session->userdata('type').'/nav');
  $this->load->view('guidelines/generalguidelines');
  $this->load->view('footer/footer');

}

public function view_eventguidelines()  {

  //redirect (); 
  $this->load->view('navigation/'.$this->session->userdata('type').'/nav');
  $this->load->view('guidelines/eventguidelines');
  $this->load->view('footer/footer');

}


public function view_eventguidelines_id()  {

  //redirect (); 
  $this->load->view('navigation/'.$this->session->userdata('type').'/nav');
  $this->load->view('guidelines/eventguidelinesid');
  $this->load->view('footer/footer');

}


public function view_islamic_event()  {

  //redirect (); 
  $this->load->view('navigation/'.$this->session->userdata('type').'/nav');
  $this->load->view('events/islamic');
  $this->load->view('footer/footer');

}

public function view_literary_event()  {

  //redirect (); 
  $this->load->view('navigation/'.$this->session->userdata('type').'/nav');
  $this->load->view('events/literary');
  $this->load->view('footer/footer');

}


public function view_musical_event()  {

  //redirect (); 
  $this->load->view('navigation/'.$this->session->userdata('type').'/nav');
  $this->load->view('events/musical');
  $this->load->view('footer/footer');

}


public function view_mind_event()  {

  //redirect (); 
  $this->load->view('navigation/'.$this->session->userdata('type').'/nav');
  $this->load->view('events/mindandarts');
  $this->load->view('footer/footer');

}

public function view_sports_event()  {

  //redirect (); 
  $this->load->view('navigation/'.$this->session->userdata('type').'/nav');
  $this->load->view('events/sports');
  $this->load->view('footer/footer');

}

public function view_tournaments()  {

  //redirect (); 
  $this->load->view('navigation/'.$this->session->userdata('type').'/nav');
  $this->load->view('tournaments/tournament');
  $this->load->view('footer/footer');

}

public function view_bracket()  {

  //redirect (); 
  $this->load->view('navigation/'.$this->session->userdata('type').'/nav');
  $this->load->view('tournaments/bracket');
  $this->load->view('footer/footer');

}

public function view_bracket2()  {

  //redirect (); 
  $this->load->view('navigation/'.$this->session->userdata('type').'/nav');
  $this->load->view('tournaments/bracket2');
  $this->load->view('footer/footer');

}


public function view_bracket3()  {

  //redirect (); 
  $this->load->view('navigation/'.$this->session->userdata('type').'/nav');
  $this->load->view('tournaments/bracket3');
  $this->load->view('footer/footer');

}


public function view_bracket4()  {

  //redirect (); 
  $this->load->view('navigation/'.$this->session->userdata('type').'/nav');
  $this->load->view('tournaments/bracket4');
  $this->load->view('footer/footer');

}


public function view_announcements()  {

  //redirect (); 
  $this->load->view('navigation/'.$this->session->userdata('type').'/nav');
  $this->load->view('announcements/list');
  $this->load->view('footer/footer');

}

public function view_announcement_id()  {

  //redirect (); 
  $this->load->view('navigation/'.$this->session->userdata('type').'/nav');
  $this->load->view('announcements/announcement_id');
  $this->load->view('footer/footer');

}

public function view_profile()  {

  //redirect (); 
  $this->load->view('navigation/'.$this->session->userdata('type').'/nav');
  $this->load->view('Profiles/profile');
  $this->load->view('footer/footer');

}
public function view_students()  {

  //redirect (); 
  $this->load->view('navigation/'.$this->session->userdata('type').'/nav');
  $this->load->view('student/list');
  $this->load->view('footer/footer');

}

}
?>