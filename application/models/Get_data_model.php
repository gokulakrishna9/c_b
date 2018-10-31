<?php 
class Get_data_model extends CI_Model{
    private $navigate = array(
        "template"=>array(
            "root_table" => "",
            "select_string" => "",
            "simple_join" => "",                                // untested
            "and_where_filters" => "",
            "session_filter" => "",
        ),
        "nav_set_current_description"=>array(
            "root_table" => "conference_description",           // set
            "select_string" => "set_current_conference",        // set, code done
        ),
        "conferences_list"=>array(
            "root_table" => "conference_description",
            "select_string" => array(
                "conference_id",
                "conference_url",
                "conference_title",
                "conference_theme",
                "conference_description",
                "venue",
                "venue_lattitude",
                "venue_longitude",
                "contact_us",
                "map_key",
                "conference_image",
                "conference_brochure",
                "venue_image",
                "zone_name",
                "visible",
                "rank",
                "abstract_template"
            ),
            "session_filter" => array("company_id")
        ),
        "conference_record"=>array(
            "root_table" => "conference_description",
            "select_string" => array(
                "conference_id",
                "conference_url",
                "conference_title",
                "conference_theme",
                "conference_description",
                "venue",
                "venue_lattitude",
                "venue_longitude",
                "contact_us",
                "conference_image",
                "map_key",
                "conference_brochure",
                "venue_image",
                "zone_name",
                "visible",
                "rank",
                "abstract_template"
            ),
            "and_where_filters" => array("conference_id")
        ),
        "get_conf_basic_info"=>array(
            "root_table" => "conference_description",
            "select_string" => array(
                 "conference_id",
                 "conference_title",
                 "rank",
                 "visible"
            ),
            "and_where_filters" => array("conference_id")
        ),
        "attendee_description_list"=>array(
            "root_table" => "attendee_description",
            "select_string" => array(
                "conference_id",
                "title",
                "attendee_description_id",
                "attendee_description",
                "visible",
                "rank"
            ),
            "session_filter" => array("conference_id")
        ),
        "attendee_description_record"=>array(
            "root_table" => "attendee_description",
            "select_string" => array(
                "conference_id",
                "title",
                "attendee_description_id",
                "attendee_description",
                "visible",
                "rank"
            ),
            "and_where_filters" => array("attendee_description_id")
        ),
        "important_dates_list"=>array(
            "root_table" => "important_dates",
            "select_string" => array(
                "conference_id",
                "date_id",
                "date",
                "description",
                "rank",
                "visible",
                "title"
            ),
            "session_filter" => array("conference_id"),
        ),
        "important_date_record"=>array(
            "root_table" => "important_dates",
            "select_string" => array(
                "date_id",
                "date",
                "description",
                "rank",
                "visible",
                "title"
            ),
            "and_where_filters" => array("date_id")
        ),
        "organizing_member_list"=>array(
            "root_table" => "organizing_members",
            "select_string" => array(
                "organizing_member_id",
                "conference_id",
                "member_first_name",
                "member_last_name",
                "designation",
                "institute",
                "country_id",
                "photo_url",
                "biography",
                "rank",
                "visible"
            ),
            "session_filter" => array("conference_id"),
        ),
        "organizing_member_record"=>array(
             "root_table" => "organizing_members",
            "select_string" => array(
                "organizing_member_id",
                "member_first_name",
                "member_last_name",
                "designation",
                "institute",
                "country_id",
                "photo_url",
                "biography",
                "rank",
                "visible"
            ),
            "and_where_filters" => array("organizing_member_id")
        ),
        "exibitor_list"=>array(
            "root_table" => "exibitors",
            "select_string" => array(
                "exibitor_id",
                "conference_id",
                "exibitor_first_name",
                "exibitor_last_name",
                "designation",
                "company",
                "country_id",
                "photo_url",
                "biography",
                "rank",
                "visible"
            ),
            "session_filter" => array("conference_id"),
        ),
        "exibitor_record"=>array(
             "root_table" => "exibitors",
            "select_string" => array(
                "exibitor_id",
                "conference_id",
                "exibitor_first_name",
                "exibitor_last_name",
                "designation",
                "company",
                "country_id",
                "photo_url",
                "biography",
                "rank",
                "visible"
            ),
            "and_where_filters" => array("exibitor_id")
        ),
        "sponcer_list"=>array(
            "root_table" => "sponcers",
            "select_string" => array(
                "sponcer_id",
                "conference_id",
                "sponcer_first_name",
                "sponcer_last_name",
                "designation",
                "institute",
                "country_id",
                "photo_url",
                "biography",
                "rank",
                "visible"
            ),
            "session_filter" => array("conference_id"),
        ),
        "sponcer_record"=>array(
            "root_table" => "sponcers",
            "select_string" => array(
                "sponcer_id",
                "conference_id",
                "sponcer_first_name",
                "sponcer_last_name",
                "designation",
                "institute",
                "country_id",
                "photo_url",
                "biography",
                "rank",
                "visible"
            ),
            "and_where_filters" => array("sponcer_id")
        ),
        "speaker_list"=>array(
            "root_table" => "speakers",
            "select_string" => array(
                "speaker_id",
                "conference_id",
                "speaker_first_name",
                "speaker_last_name",
                "designation",
                "institute",
                "country_id",
                "photo_url",
                "biography",
                "rank",
                "visible"
            ),
            "session_filter" => array("conference_id"),
        ),
        "speaker_record"=>array(
            "root_table" => "speakers",
            "select_string" => array(
                "speaker_id",
                "conference_id",
                "speaker_first_name",
                "speaker_last_name",
                "designation",
                "institute",
                "country_id",
                "photo_url",
                "biography",
                "rank",
                "visible"
            ),
            "and_where_filters" => array("speaker_id")
        ),
        "program_schedule_list"=>array(
            "root_table" => "program_schedule",
            "select_string" => array(
                "conference_id",
                "schedule_id",
                "day",
                "session_date",
                "session_start",
                "session_end",
                "session_description",
                "rank",
                "visible"
            ),
            "session_filter" => array("conference_id"),
        ),
        "program_schedule_record"=>array(
            "root_table" => "program_schedule",
            "select_string" => array(
                "conference_id",
                "schedule_id",
                "day",
                "session_date",
                "session_start",
                "session_end",
                "session_description",
                "rank",
                "visible"
            ),
            "and_where_filters" => array("schedule_id")
        ),
        "conference_purpose_list"=>array(
            "root_table" => "purpose_of_conference",
            "select_string" => array(
                "conference_id",
                "purpose_id",
                "purpose_description",
                "purpose_rank",
                "rank",
                "visible",
                "title"
            ),
            "session_filter" => array("conference_id"),
        ),
        "conference_puropse_record"=>array(
            "root_table" => "purpose_of_conference",
            "select_string" => array(
                "conference_id",
                "purpose_id",
                "purpose_description",
                "purpose_rank",
                "rank",
                "visible",
                "title"
            ),
            "and_where_filters" => array("purpose_id")
        ),
        "quick_link_list"=>array(
            "root_table" => "quick_link",
            "select_string" => array(
                "link_id",
                "link_description",
                "link",
                "rank",
                "title",
                "visible"
            ),            
            "session_filter" => array("conference_id"),
        ),
        "quick_link_record"=>array(
            "root_table" => "quick_link",
            "select_string" => array(
                "link_id",
                "link_description",
                "link",
                "rank",
                "title",
                "visible"
            ),            
            "and_where_filters" => array("link_id")
        ),
        "scientific_sessions_list"=>array(
            "root_table" => "scientific_sessions",
            "select_string" => array(
                "session_description",
                "session_id",
                "session_name",
                "session_date",
                "start_time",
                "end_time",
                "rank",
                "visible",
                "title"
            ),
            "session_filter" => array("conference_id"),
        ),
        "scientific_session_record"=>array(
            "root_table" => "scientific_sessions",
            "select_string" => array(
                "session_description",
                "session_id",
                "session_name",
                "session_date",
                "start_time",
                "end_time",
                "rank",
                "visible",
                "title"
            ),
            "and_where_filters" => array("session_id")
        ),
        "feature_description_list"=>array(
            "root_table" => "special_features",
            "select_string" => array(
                "conference_id",
                "feature_id",
                "feature_description",
                "rank",
                "title",
                "visible"
            ),
            "session_filter" => array("conference_id"),
        ),
        "feature_record"=>array(
            "root_table" => "special_features",
            "select_string" => array(
                "conference_id",
                "feature_id",
                "feature_description",
                "rank",
                "title",
                "visible"
            ),
            "and_where_filters" => array("feature_id")
        ),
        "conference_urls"=>array(
            "root_table" => "conference_description",
            "select_string" => array(
                "conference_id",
                "conference_url",
                "rank",
                "visible"
            )        
        ),
        "company_list"=>array(
            "root_table" => "about_company",
            "select_string" => array(
                "company_id",
                "company_name",
                "company_header",
                "about_company",
                "about_company_detailed",
                "company_address",
                "company_lattitude",
                "company_longitude",
                "contact_us_at",
                "company_logo",
                "company_name",
                "company_header",
                "company_url",
                "rank",
                "visible",
                "map_key"
            )
        ),
        "about_company_record"=>array(
            "root_table" => "about_company",
            "select_string" => array(
                "company_id",
                "company_name",
                "company_header",
                "about_company",
                "about_company_detailed",
                "company_address",
                "company_lattitude",
                "company_longitude",
                "contact_us_at",
                "company_logo",
                "company_url",
                "rank",
                "visible",
                "map_key"
            ),
            "and_where_filters" => array("company_id")
        ),
        "company_basic_record"=>array(
            "root_table" => "about_company",
            "select_string" => array(
                "company_id",
                "company_name",
                "company_url",
                "rank",
                "visible"
            ),
            "and_where_filters" => array("company_id")
        ),
        "company_images_list"=>array(
            "root_table" => "carousel_images_company_site",
            "select_string" => array(
                "image_id",
                "title",
                "company_id",
                "image_url",
                "paragraph",
                "rank",
                "visible"
            ),
            "session_filter" => array("company_id")
        ),
        "company_url_list"=>array(
            "root_table" => "about_company",
            "select_string" => array(
                "company_id",
                "company_url",
                "rank",
                "visible"
            ),
            "session_filter" => array("company_id")
        ),
        "company_image_record"=>array(
            "root_table" => "carousel_images_company_site",
            "select_string" => array(
                "image_id",
                "company_id",
                "title",
                "image_url",
                "paragraph",
                "rank",
                "visible"
            ),
            "and_where_filters" => array("image_id")
        ),
        "users_list"=>array(
            "root_table" => "users",
            "select_string" => array(
                "user_name",
                "user_id",
                "company_id",
                "first_name",
                "last_name",
                "password",
                "enable",
                "rank",
                "visible"
            ),
            "session_filter" => array("company_id")
        ),
        "user_record"=>array(
            "root_table" => "users",
            "select_string" => array(
                "user_name",
                "user_id",
                "company_id",
                "first_name",
                "last_name",
                "password",
                "enable",
                "rank",
                "visible"
            ),
            "and_where_filters" => array("user_id")
        ),
        "users_list"=>array(
            "root_table" => "users",
            "select_string" => array(
                "user_name",
                "user_id",
                "company_id",
                "first_name",
                "last_name",
                "password",
                "enable",
                "rank",
                "visible"
            ),
            "session_filter" => array("company_id")
        ),
        "user_record"=>array(
            "root_table" => "users",
            "select_string" => array(
                "user_name",
                "user_id",
                "company_id",
                "first_name",
                "last_name",
                "password",
                "enable",
                "rank",
                "visible"
            ),
            "and_where_filters" => array("user_id")
        ),
        "journals_list"=>array(
            "root_table" => "journals",
            "select_string" => array(
                "journal_id",
                "conference_id",
                "title",
                "first_name",
                "last_name",
                "designation",
                "institute",
                "country_id",
                "biography",
                "journal_url",
                "rank",
                "visible"
            ),
            "session_filter" => array("conference_id")
        ),
        "journal_record"=>array(
            "root_table" => "journals",
            "select_string" => array(
                "journal_id",
                "conference_id",
                "title",
                "first_name",
                "last_name",
                "designation",
                "institute",
                "country_id",
                "biography",
                "journal_url",
                "rank",
                "visible"
            ),
            "and_where_filters" => array("journal_id")
        ),
        "abstracts_list"=>array(
            "root_table" => "abstracts",
            "select_string" => array(
                "abstract_id",
                "conference_id",
                "title",
                "first_name",
                "last_name",
                "designation",
                "institute",
                "country_id",
                "biography",
                "abstract_url",
                "rank",
                "visible"
            ),
            "session_filter" => array("conference_id")
        ),
        "abstract_record"=>array(
            "root_table" => "abstracts",
            "select_string" => array(
                "abstract_id",
                "conference_id",
                "title",
                "first_name",
                "last_name",
                "designation",
                "institute",
                "country_id",
                "biography",
                "abstract_url",
                "rank",
                "visible"
            ),
            "and_where_filters" => array("abstract_id")
        ),
        "payment_group_conference_list"=>array(
            "root_table" => "payment_group",
            "select_string" => array(
                "conference_id",
                "payment_group_id",
                "group_name",
                "rank",
                "visible"
            ),
            "session_filter" => array("conference_id")
        ),
        "payment_category_list"=>array(
            "root_table" => "payment_category",
            "select_string" => array(
                 "payment_category_id",
                 "category_name",
                 "valid_till",
                 "rank",
                 "visible"
            ),
            "session_filter" => array("conference_id")
        ),
        "payment_category_record"=>array(
            "root_table" => "payment_category",
            "select_string" => array(
                 "payment_category_id",
                 "category_name",
                 "valid_till",
                 "rank",
                 "visible"
            ),
            "and_where_filters" => array("payment_category_id")
        ),
        "payment_offer_list"=>array(
            "root_table" => "payment_offer",
            "select_string" => array(
                "payment_offer_id",
                "group_name",
                "category_name",
                "package_name",
                "amount",
                "offer_description",
                "rank",
                "visible"
            ),
            "session_filter" => array("conference_id")
        ),
        "payment_offer_record"=>array(
            "root_table" => "payment_offer",
            "select_string" => array(
                "payment_offer_id",
                "group_name",
                "category_name",
                "package_name",
                "amount",
                "offer_description",
                "rank",
                "visible"
            ),
            "and_where_filters" => array("payment_offer_id")
        ),
        "package_list"=>array(
            "root_table" => "payment_package",
            "select_string" => array(
                "package_id",
                "package_name",
                "terms_and_conditions",
                "rank",
                "visible"
            ),
            "session_filter" => array("conference_id")
        ),
        "package_record"=>array(
            "root_table" => "payment_package",
            "select_string" => array(
                "package_id",
                "package_name",
                "terms_and_conditions",
                "rank",
                "visible"
            ),
            "and_where_filters" => array("package_id")
        ),
        "zone"=>array(
            "root_table" => "zone",
            "select_string" => array(
                "zone_name"
            )
        ),
        "term_list"=>array(
            "root_table" => "payment_term",
            "select_string" => array(
                "term_id",
                "term_name",
                "terms_and_conditions",
                "rank",
                "visible"
            ),
            "session_filter" => array("conference_id")
        ),
        "term_record"=>array(
            "root_table" => "payment_term",
            "select_string" => array(
                "term_id",
                "term_name",
                "terms_and_conditions",
                "rank",
                "visible"
            ),
            "and_where_filters" => array("term_id")
        ),
        "conference_image_record"=>array(
            "root_table" => "carousel_images_conference_site",
            "select_string" => array(
                "image_id",
                "title",
                "conference_id",
                "image_url",
                "paragraph",
                "rank",
                "visible"
            ),
            "and_where_filters" => array("image_id")
        ),
		"conference_images_list"=>array(
            "root_table" => "carousel_images_conference_site",
            "select_string" => array(
                "image_id",
                "title",
                "conference_id",
                "image_url",
                "paragraph",
                "rank",
                "visible"
            ),
            "session_filter" => array("conference_id")
        ),
        "market_list"=>array(
            "root_table" => "special_markets",
            "select_string" => array(
                "conference_id",
                "market_id",
                "market_description",
                "rank",
                "title",
                "visible"
            ),
            "session_filter" => array("conference_id"),
        ),
        "market_record"=>array(
            "root_table" => "special_markets",
            "select_string" => array(
                "conference_id",
                "market_id",
                "market_description",
                "rank",
                "title",
                "visible"
            ),
            "and_where_filters" => array("market_id")
        ),
        "terms_and_conditions_list"=>array(
            "root_table" => "payment_term",
            "select_string" => array(
                "company_id",
                "term_id",
                "term_name",
                "terms_and_conditions",
                "rank",
                "visible"
            ),
            "session_filter" => array("company_id"),
        ),
        "terms_and_conditions_record"=>array(
            "root_table" => "payment_term",
            "select_string" => array(
                "company_id",
                "term_id",
                "term_name",
                "terms_and_conditions",
                "rank",
                "visible"
            ),
            "and_where_filters" => array("term_id")
        ),
    );
    
    function __construct(){
        parent::__construct();
    }

    function get_data($routes = false, $set_filter = false){
        // Routes are set
        if(!$routes){
            return false;
        }
        $return_data = array();
        
        // Entering foreach
        foreach($routes as $route){
            if(array_key_exists($route, $this->navigate)){
                  // Session filter
                  $session_filters = array_key_exists("session_filter", $this->navigate[$route]) ? $this->navigate[$route]['session_filter'] : FALSE;
                  // Select string                  
                  $select_string = array();
                  foreach($this->navigate[$route]['select_string'] as $field){
                      $select_string[] = $this->navigate[$route]['root_table'].'.'.$field;    // Add an as here.
                  }

                  // And where filter
                  $and_where_array = array();
                  $where_not_set = true;           
                  if(array_key_exists('and_where_filters', $this->navigate[$route])){
                        $filters = $this->navigate[$route]['and_where_filters'];
                        foreach($filters as $filter){ 
                            if($this->input->post($filter) != NULL){                    
                                $and_where_array[$this->navigate[$route]['root_table'].'.'.$filter] = $this->input->post($filter);
                            }else if(!$set_filter && !$session_filters){
                                $where_not_set = false;
                            }
                        }                                    
                    }
                    //And where filter not set
                    if(!$where_not_set){
                        $return_data[$route] = false;
                        continue;
                    }


                    // Set filter for generic filters
                    if($set_filter){
                        foreach($set_filter as $key => $value){
                            $and_where_array[$this->navigate[$route]['root_table'].'.'.$key] = $value;
                        }
                    }
                    
                    // Build Session filters                       
                    if($session_filters){           
                        foreach($session_filters as $filter){
                            if($this->session->has_userdata("$filter")){
                                $and_where_array[$this->navigate[$route]['root_table'].'.'.$filter] = $this->session->$filter; 
                            }               
                        } 
                    }
   
                    $this->db->select($select_string);
                    $this->db->from($this->navigate[$route]['root_table']);
                    if(sizeof($and_where_array) > 0){
                        $this->db->where($and_where_array);
                    }                    
                    
                    $query = $this->db->get();        
                    $result = $query->result();
      
                    if($result){
                         $return_data[$route] = $result;    // Route exists with data    
                    }else{
                         $return_data[$route] = false;      // Route exists no data
                    }
            }else{
                $return_data[$route] = false;               // Route does not exist
            }
        }
        return $return_data;
    }
}

?>