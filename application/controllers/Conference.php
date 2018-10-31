<?php 

class Conference extends CI_Controller{
    function __construct(){
        parent::__construct();
    }

    public function add_conference(){
       if($this->session->logged_in != 'YES'){
            echo json_encode(array ('logged_in' => false));
            return;
       }

       $this->db->load('conference_description_model');
       $model_response = $this->conference_description_model->add_conference();
       $response = array(
           'logged_in' => true,
           'model_response' => $model_response
       );
       echo json_encode($response);
    }   

    public function get_conferences_details(){
        if($this->session->logged_in != 'YES'){
            echo json_encode(array ('logged_in' => false));
            return;
        }

        $this->db->load('conference_description_model');
        $model_response = $this->conference_description_model->get_conferences_details();
        $response = array(
            'logged_in' => true,
            'model_response' => $model_response
        );
        echo json_encode($response);                
    }

    public function update_conference(){
        if($this->session->logged_in != 'YES'){
            echo json_encode(array ('logged_in' => false));
            return;
        }

        $this->db->load('conference_description_model');
        $model_response = $this->conference_description_model->update_conference();
        $response = array(
           'logged_in' => true,
           'model_response' => $model_response
        );
        echo json_encode($response);
    }

    public function delete_conferenceses(){
        if($this->session->logged_in != 'YES'){
            echo json_encode(array ('logged_in' => false));
            return;
        }

        $this->db->load('conference_description_model');
        $model_response = $this->conference_description_model->get_conferences_details($conference_ids);
        $response = array(
            'logged_in' => true,
            'model_response' => $model_response
        );
        echo json_encode($response);
    }
}

?>