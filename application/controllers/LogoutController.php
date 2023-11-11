<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
  
  class Logout extends BaseController
  {
      public function index()
      {
          // Destroy the user's session
          session()->destroy();
  
          // Redirect to the desired page after logout
          return redirect()->to('login');
      }
  }
  

?>