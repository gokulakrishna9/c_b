<?php

class Conference_description extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    function add_conference_description(){
        $mandatory_fields = array();
        $fields_allowed = $mandatory_fields;

        $conference_data = json_decode($this->input->raw_input_stream);
        foreach($mandatory_fields as $mandatory_field){
            if(array_key_exists($mandatory_field, $conference_data)){
                continue;
            }

            $model_response = array();
            $model_response['valid_input'] = 'false';
            $model_response['response_data'] = 'NULL';
            return $model_response;
        }

        foreach($conference_data as $field_name => $field_value){
            if(!in_array($field_name, $fields_allowed)){
                unset($conference_data[$field_name]);
            }
        }

        $this->db->insert('conference_description', $conference_data);
        $model_response = array();
        $model_response['valid_input'] = 'true';
        $model_response['response_data'] = $this->db->insert_id();
        return $model_response;
    }

    function update_conference_description(){
        $mandatory_fields = array();
        $fields_allowed = array();
        $filters = array();

        $conference_data = json_decode($this->input->raw_input_stream);
        foreach($mandatory_fields as $mandatory_field){
            if(array_key_exists($mandatory_field, $conference_data)){
                continue;
            }
            $model_response = array();
            $model_response['valid_input'] = 'false';
            $model_response['response_data'] = 'NULL';
            return $model_response;
        }

        $filters_values = array();
        foreach($filters as $filter){
            if(array_key_exists($filter, $conference_data)){
                $filters_values[$filter] = $conference_data[$filter];
            }
        } 

        foreach($conference_data as $field_name => $field_value){
            if(!in_array($field_name, $fields_allowed)){
                unset($conference_data[$field_name]);
            }
        }

        $this->db->or_where($filters_values);
        $this->db->update($conference_data);
        $number_of_rows_affected = $this->db->affected_rows();
        $model_response = array();
        $model_response['valid_input'] = 'false';
        $model_response['response_data'] = $number_of_rows_affected;
        return $model_response;
    }

    function get_conferences_description(){
        $mandatory_fields = array();
        $fields_allowed = array();
        $filters = array();

        $conference_data = json_decode($this->input->raw_input_stream);
        $filters_values = array();
        foreach($filters as $filter){
            if(array_key_exists($filter, $conference_data)){
                $filters_values[$filter] = $conference_data[$filter];
            }
        } 

        foreach($conference_data as $field_name => $field_value){
            if(!in_array($field_name, $fields_allowed)){
                unset($conference_data[$field_name]);
            }
        }

        $this->db->select(implode(',', $fields_allowed))
            ->from('conference_description')
            ->where("$filters_values");
        $query = $this->db->get();
        $result = $query->result();

        $model_response = array();
        $model_response['valid_input'] = 'true';
        $model_response['response_data'] = $result;
        return $model_response;
    }

    function delete_conference_description(){
        $mandatory_fields = array();
        $fields_allowed = array();
        $filters = array();

        $conference_data = json_decode($this->input->raw_input_stream);
        foreach($mandatory_fields as $mandatory_field){
            if(array_key_exists($mandatory_field, $conference_data)){
                continue;
            }
            $model_response = array();
            $model_response['valid_input'] = 'false';
            $model_response['response_data'] = 'NULL';
            return $model_response;
        }

        $filters_values = array();
        foreach($filters as $filter){
            if(array_key_exists($filter, $conference_data)){
                $filters_values[$filter] = $conference_data[$filter];
            }
        } 

        foreach($conference_data as $field_name => $field_value){
            if(!in_array($field_name, $fields_allowed)){
                unset($conference_data[$field_name]);
            }
        }

        $this->db->where($filters_values);
        $this->db->delete($conference_data);
        $number_of_rows_affected = $this->db->affected_rows();
        $model_response = array();
        $model_response['valid_input'] = 'false';
        $model_response['response_data'] = $number_of_rows_affected;
        return $model_response;
    }
}


?>