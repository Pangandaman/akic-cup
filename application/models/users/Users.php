<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Model{

public function __construct() {
parent::__construct();

}

public function is_exist($where) {
    $this->db->where($where);
    $query = $this->db->get('users');
    return $query->num_rows() == 1 ? true : false;
}


public function check_credentials($username, $password) {
    $this->db->where(array('username' => $username, 'password' => $password));
    $query = $this->db->get('users');
    return $query->num_rows() == 1 ? true : false;
}




public function create_sessions($username) {
    $sql1 = "SELECT u.username, u.user_id, e.lname, e.fname, e.mname, e.employee_id, ut.type_name FROM users u, employee e, user_type ut WHERE u.username = '$username' AND u.emp_id = e.employee_id AND u.usertype_id = ut.usertype_id";
    
    $query = $this->db->query($sql1);
    if ($query !== FALSE) {
        if ($query->num_rows() == 1) {
            $row = $query->row_array();
          //  $mf = $this->modules->user_has_module($row['user_id'], 1);
          //  $mf1 = $this->modules->user_has_module($row['user_id'], 2);
            $f = $row['fname'].' '.strtoupper($row['mname'][0]).', '.$row['lname'];
            $sessions = array(
                'users' => ucwords($f),
                'time' => date('H:i:s'),
                'username' => $username,
                'is_logged_in' => true,
                'user_id' => $row['user_id'],
                'type' => $row['type_name'],
                'module' => 'akic-cup'
            );

            $this->load->library('session');
            $this->session->set_userdata($sessions);
        }

    }
}

public function destroy_sessions() {


$sessions = array('user' => '', 'time' => '', 'user_id' => '', 'username' => '', 'is_logged_in' => false, 'type' => '');

$this->load->library('session');
$this->session->unset_userdata($sessions);
$this->session->sess_destroy();

}


}
