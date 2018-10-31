<?php 

class User_model extends CI_Model{
    private $user_information = array();

    function __construct(){
        parent::__construct();
        $user_information['user_id'] = array('integer');
		$user_information['user_name'] = array('varchar');
		$user_information['password'] = array('varchar');
		$user_information['created_on'] = array('datetime');
    }

    public function check_credentials(){
        $mandatory_fields = array('user_name', 'password');                                     // Fields that need to be present mandatorily.
        $fields_allowed = $mandatory_fields;

        $model_response = array();

        $login_data = $this->input->raw_input_stream;	                                    	//Check if xss_scripting check is done automatically, if set in config.
        $login_data = json_decode($login_data);
        foreach($mandatory_fields as $mandatory_field){
            if(array_key_exists($mandatory_field, $login_data)){
                continue;
            }
            $model_response['valid_input'] = false;
            $model_response['response_data'] = 'NULL';
            return $model_response;
        }

        $login_data = array_intersect_key($login_data, $fields_allowed);

        $this->db->select('*')
        ->from('users')
        ->where($login_data);

        $query = $this->db->get();
        $result = $query->result();

        if(empty($result)){
            $model_response['valid_input'] = true;
            $model_response['response_data'] = 'NULL';
            return $model_response;
        }

        $model_response['valid_input'] = true;
        $model_response['response_data'] = $result;
        return $model_response;
    }
}

?>