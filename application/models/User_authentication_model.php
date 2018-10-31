<?php 

class User_authentication_model extends CI_Model {
    function __construct(){
        parent::__construct();
    }

    function authenticate_staff(){
        $staff_credentials = array(
            'user_name' => $this->input->post('user_name'),
            'password' => $this->input->post('password')
        );
        if($staff_credentials['user_name'] == NULL || $staff_credentials['password'] == NULL){
            return false;
        }

        $staff_credentials['password'] = md5($staff_credentials['password']);

        $this->db->select('*');
        $this->db->from('users');
        $this->db->where($staff_credentials);

        $query = $this->db->get();
        $first_row = $query->row();
        
        if(isset($first_row)){
            $logged_in = array('user_name' => $first_row->user_name,
                               'logged_in' => 'YES'       
                         );
            $this->session->set_userdata($logged_in);
            
            return true;
        }
        return false;
    }
}


?>