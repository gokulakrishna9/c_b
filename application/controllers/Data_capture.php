<?php 

class Data_capture extends CI_Controller{
    private $navigate = array(
        "nav_add_attendee_description"=>array(
            "header"=>"staff_pages/common_pages/staff_header",
            "left_nav"=>"staff_pages/common_pages/conferences_leftnav",
            "page"=>"staff_pages/conference_site_creation/attendee_description",
            "footer"=>"empty",
            "page_name" => "Add Attendee Description",                                      // set
            "data_source" => array("attendee_description_list", "attendee_description_record"),                                 // set, get data navigate            
            "add_record" => "nav_add_attendee_description",
            "update_record" => "nav_add_attendee_description_record",
            "data_session" => array("conference_title")
        ),
        "nav_add_conference_description"=>array(
            "header"=>"staff_pages/common_pages/staff_header",
            "left_nav"=>"staff_pages/common_pages/conferences_leftnav",
            "page"=>"staff_pages/conference_site_creation/conference_description",
            "footer"=>"empty",
            "page_name" => "Add Conference",                                                // set
            "data_source" => array("conferences_list", "conference_record","zone"),                                 // set, get data navigate            
            "add_record" => "nav_add_conference_description",
            "update_record" => "nav_add_conference_description_record",
        ),
        "nav_add_important_dates"=>array(
            "header"=>"staff_pages/common_pages/staff_header",
            "left_nav"=>"staff_pages/common_pages/conferences_leftnav",
            "page"=>"staff_pages/conference_site_creation/important_dates",
            "footer"=>"empty",
            "page_name" => "Important Dates",                                      // set
            "data_source" => array("important_dates_list", "important_date_record"),                                 // set, get data navigate            
            "add_record" => "nav_add_important_dates",
            "update_record" => "nav_add_important_dates_record",
        ),
        "nav_add_organizing_members"=>array(
            "header"=>"staff_pages/common_pages/staff_header",
            "left_nav"=>"staff_pages/common_pages/conferences_leftnav",
            "page"=>"staff_pages/conference_site_creation/organizing_members",
            "footer"=>"empty",
            "page_name" => "Organizing Members",                                              // set
            "data_source" => array("organizing_member_list", "organizing_member_record"),                                 // set, get data navigate            
            "add_record" => "nav_add_organizing_members",
            "update_record" => "nav_add_organizing_members_record",
        ),
        "nav_add_speakers"=>array(
            "header"=>"staff_pages/common_pages/staff_header",
            "left_nav"=>"staff_pages/common_pages/conferences_leftnav",
            "page"=>"staff_pages/conference_site_creation/speakers",
            "footer"=>"empty",
            "page_name" => "Speakers",                                              
            "data_source" => array("speaker_record", "speaker_list"),                           
            "add_record" => "nav_add_speaker",
            "update_record" => "nav_add_speaker_record",
        ),
        "nav_add_exibitors"=>array(
            "header"=>"staff_pages/common_pages/staff_header",
            "left_nav"=>"staff_pages/common_pages/conferences_leftnav",
            "page"=>"staff_pages/conference_site_creation/exibitors",
            "footer"=>"empty",
            "page_name" => "Exibitors",                                              // set
            "data_source" => array("exibitor_record", "exibitor_list"),                                 // set, get data navigate            
            "add_record" => "nav_add_exibitor",
            "update_record" => "nav_add_exibitor_record",
        ),
        "nav_add_sponcers"=>array(  
            "header"=>"staff_pages/common_pages/staff_header",
            "left_nav"=>"staff_pages/common_pages/conferences_leftnav",
            "page"=>"staff_pages/conference_site_creation/sponcers",
            "footer"=>"empty",
            "page_name" => "Organizing Members",                                              // set
            "data_source" => array("sponcer_list", "sponcer_record"),                                 // set, get data navigate            
            "add_record" => "nav_add_sponcer",
            "update_record" => "nav_add_sponcer_record",
        ),
        "nav_add_program_schedule"=>array(
            "header"=>"staff_pages/common_pages/staff_header",
            "left_nav"=>"staff_pages/common_pages/conferences_leftnav",
            "page"=>"staff_pages/conference_site_creation/program_schedule",
            "footer"=>"empty",
            "page_name" => "Program Schedule",                                                          // set
            "data_source" => array("program_schedule_list", "program_schedule_record"),                                 // set, get data navigate            
            "add_record" => "nav_add_program_schedule",
            "update_record" => "nav_add_program_schedule_record",
        ),
        "nav_add_purpose_of_conference"=>array(
            "header"=>"staff_pages/common_pages/staff_header",
            "left_nav"=>"staff_pages/common_pages/conferences_leftnav",
            "page"=>"staff_pages/conference_site_creation/purpose_of_conference",
            "footer"=>"empty",
            "page_name" => "Program Schedule",                                      // set
            "data_source" => array("conference_purpose_list", "conference_puropse_record"),                                 // set, get data navigate            
            "add_record" => "nav_add_purpose_of_conference",
            "update_record" => "nav_add_purpose_of_conference_record",
        ),
        "nav_add_quick_link"=>array(
            "header"=>"staff_pages/common_pages/staff_header",
            "left_nav"=>"staff_pages/common_pages/conferences_leftnav",
            "page"=>"staff_pages/conference_site_creation/quick_link",
            "footer"=>"empty",
            "page_name" => "Quick Link",                                                // set
            "data_source" => array("quick_link_list", "quick_link_record"),                             // set, get data navigate            
            "add_record" => "quick_link",
            "update_record" => "quick_link_record",
        ),
        "nav_add_scientific_sessions"=>array(
            "header"=>"staff_pages/common_pages/staff_header",
            "left_nav"=>"staff_pages/common_pages/conferences_leftnav",
            "page"=>"staff_pages/conference_site_creation/scientific_sessions",
            "footer"=>"empty",
            "page_name" => "Scientific Sessions",                                      // set
            "data_source" => array("scientific_sessions_list", "scientific_session_record"),                            // set, get data navigate            
            "add_record" => "nav_add_scientific_sessions",
            "update_record" => "nav_add_scientific_sessions_record",
        ),
        "nav_add_special_features"=>array(
            "header"=>"staff_pages/common_pages/staff_header",
            "left_nav"=>"staff_pages/common_pages/conferences_leftnav",
            "page"=>"staff_pages/conference_site_creation/special_features",
            "footer"=>"empty",
            "page_name" => "Special Features",                                     // set
            "data_source" => array("feature_description_list", "feature_record"),                                                            // set, get data navigate            
            "add_record" => "nav_add_special_features",
            "update_record" => "nav_add_special_features_record",
        ),
        "nav_add_users"=>array(
            "header"=>"staff_pages/common_pages/staff_header",
            "left_nav"=>"staff_pages/common_pages/company_leftnav",
            "page"=>"staff_pages/company_site_updation/users",
            "footer"=>"empty",
            "page_name" => "Add Users",
            "data_source" => array("users_list", "user_record"),                                                            // set, get data navigate            
            "add_record" => "users",
            "update_record" => "users_record",
        ),
        "nav_add_journal"=>array(
            "header"=>"staff_pages/common_pages/staff_header",
            "left_nav"=>"staff_pages/common_pages/conferences_leftnav",
            "page"=>"staff_pages/conference_site_creation/journals",
            "footer"=>"empty",
            "page_name" => "Add Journal",
            "data_source" => array("journal_record", "journals_list"),                                                            // set, get data navigate            
            "add_record" => "journals",
            "update_record" => "journal_record",
        ),
        "nav_add_abstract"=>array(
            "header"=>"staff_pages/common_pages/staff_header",
            "left_nav"=>"staff_pages/common_pages/conferences_leftnav",
            "page"=>"staff_pages/conference_site_creation/abstract",
            "footer"=>"empty",
            "page_name" => "Add Abstract",
            "data_source" => array("abstracts_list", "abstract_record"),                                                            // set, get data navigate            
            "add_record" => "abstracts",
            "update_record" => "abstract_record",
        ),
        "nav_add_about_company"=>array(
            "header"=>"staff_pages/common_pages/staff_header",
            "left_nav"=>"staff_pages/common_pages/company_leftnav",
            "page"=>"staff_pages/company_site_updation/add_about_company",
            "footer"=>"empty",
            "page_name" => "Update Company Carousel",
            "data_source" => array("company_list", "about_company_record"),
            "add_record" => "about_company",
            "update_record" => "about_company_record"
        ),
        "nav_set_current_company"=>array(
            "header"=>"staff_pages/common_pages/staff_header",
            "left_nav"=>"staff_pages/common_pages/company_leftnav",
            "page"=>"staff_pages/company_site_updation/set_current_company",
            "footer"=>"empty",
            "page_name" => "Update Company Carousel",
            "data_source" => array("company_list"),
            "session_record" => array("company_basic_record")
        ),
        "nav_carousel_images_company_site"=>array(
            "header"=>"staff_pages/common_pages/staff_header",
            "left_nav"=>"staff_pages/common_pages/company_leftnav",
            "page"=>"staff_pages/company_site_updation/carousel_images_company_site",
            "footer"=>"empty",
            "page_name" => "Update Company Carousel",   
            "data_source" => array("company_images_list", "company_image_record"),            
            "add_record" => "company_image",
            "update_record" => "company_image_record"
        ),
        "nav_set_current_conference"=>array(
            "header"=>"staff_pages/common_pages/staff_header",                          
            "left_nav"=>"staff_pages/common_pages/conferences_leftnav",                 
            "page"=>"staff_pages/conference_site_creation/set_current_conference",      
            "footer"=>"empty",                                                          
            "page_name" => "Set Current Conference",                                    
            "data_source" => array("conferences_list", "carousel_image_record"),
            "add_record" => "",
            "update_record" => "",
            "session_record" => array("get_conf_basic_info")
        ),
        "login"=>array(
            "header"=>"common_pages/staff_login_header",
            "left_nav"=>"empty",
            "page"=>"staff_pages/staff_login",
            "footer"=>"empty"
        ),
        "nav_payment_group_conference"=>array(
            "header"=>"staff_pages/common_pages/staff_header",
            "left_nav"=>"staff_pages/common_pages/conferences_leftnav",
            "page"=>"staff_pages/conference_site_creation/payment_group_conference",
            "footer"=>"empty",
            "page_name" => "Conference Payment Group",   
            "data_source" => array("payment_group_conference_list", "payment_group_conference_record"),            
            "add_record" => "payment_group_conference",
            "update_record" => "payment_group_conference_record"
        ),
        "nav_conference_payment_category"=>array(
            "header"=>"staff_pages/common_pages/staff_header",
            "left_nav"=>"staff_pages/common_pages/conferences_leftnav",
            "page"=>"staff_pages/conference_site_creation/payment_category",
            "footer"=>"empty",
            "page_name" => "Conference Payment Category",   
            "data_source" => array("payment_category_list", "payment_category_record"),            
            "add_record" => "payment_category",
            "update_record" => "payment_category_record"
        ),        
        "nav_conference_payment_package"=>array(
            "header"=>"staff_pages/common_pages/staff_header",
            "left_nav"=>"staff_pages/common_pages/conferences_leftnav",
            "page"=>"staff_pages/conference_site_creation/payment_package",
            "footer"=>"empty",
            "page_name" => "Conference Payment Package",   
            "data_source" => array("package_list", "package_record"),            
            "add_record" => "payment_package",
            "update_record" => "payment_package_record"
        ),
        "nav_conference_payment_offer"=>array(
            "header"=>"staff_pages/common_pages/staff_header",
            "left_nav"=>"staff_pages/common_pages/conferences_leftnav",
            "page"=>"staff_pages/conference_site_creation/payment_offer",
            "footer"=>"empty",
            "page_name" => "Conference Payment Offer",   
            "data_source" => array("payment_category_list", "payment_group_conference_list", "package_list", "payment_offer_list", "payment_offer_record"),            
            "add_record" => "payment_offer",
            "update_record" => "payment_offer_record"
        ),
        "nav_carousel_images_conference_site"=>array(
            "header"=>"staff_pages/common_pages/staff_header",
            "left_nav"=>"staff_pages/common_pages/conferences_leftnav",
            "page"=>"staff_pages/conference_site_creation/carousel_images_conference_site",
            "footer"=>"empty",
            "page_name" => "Conference Carousel Images",   
            "data_source" => array("conference_image_record", "conference_images_list"),            
            "add_record" => "conference_image",
            "update_record" => "conference_image_record"
        ),
        "nav_add_markets"=>array(
            "header"=>"staff_pages/common_pages/staff_header",
            "left_nav"=>"staff_pages/common_pages/conferences_leftnav",
            "page"=>"staff_pages/conference_site_creation/market_research",
            "footer"=>"empty",
            "page_name" => "Market Research for Conference",   
            "data_source" => array("market_record", "market_list"),            
            "add_record" => "add_markets",
            "update_record" => "add_markets_record"
        ),
        "nav_visible_conferences"=>array(
            "header"=>"staff_pages/common_pages/staff_header",
            "left_nav"=>"staff_pages/common_pages/company_leftnav",
            "page"=>"staff_pages/company_site_updation/visible_conferences",
            "footer"=>"empty",
            "page_name" => "Set Conference Visible",                                                // set
            "data_source" => array("conferences_list", "conference_record"),                                 // set, get data navigate            
            "add_record" => "",
            "update_record" => "nav_add_conference_description_record",
        ),
        "nav_company_payment_terms"=>array(
            "header"=>"staff_pages/common_pages/staff_header",
            "left_nav"=>"staff_pages/common_pages/company_leftnav",
            "page"=>"staff_pages/company_site_updation/terms_and_conditions",
            "footer"=>"empty",
            "page_name" => "Terms And Conditions",                                                // set
            "data_source" => array("terms_and_conditions_list", "terms_and_conditions_record"),                                 // set, get data navigate            
            "add_record" => "add_terms_and_conditions",
            "update_record" => "terms_and_conditions_record",
        )
    );

    function __construct(){
        parent::__construct();
        $this->load->model('data_capture_model');
        $this->load->model('get_data_model');
    }

    private $host_names = array(
		"openaccounting.in" => array(
			"route"=>"welcome",
            "filters"=>false
		)
	);

    public function cr_data($navigate = FALSE){
        $headers = $this->input->request_headers();
		if(!(array_key_exists('Host', $headers) && array_key_exists($headers['Host'], $this->host_names))){
			show_404();
			return;
		}
        
        // Login check working
        if($this->session->logged_in != 'YES'){
            $navigate = 'login';
        }
        // Navigation set check
        if($navigate === FALSE){
            $navigate = $this->input->get_post('navigate');
        }
        // Navigation set check
        if($navigate == NULL){
            $navigate = 'login';
        }       
        if(!array_key_exists($navigate, $this->navigate)){
            $navigate = 'login';
        }

        $this->data['empty'] = '';

        if($this->input->post('update') != NULL){
            $this->data["update_record"] = true;
        }else{
            $this->data["update_record"] = false;
        }

        // Add data to MySQL
        if($this->input->post('submit') != NULL && array_key_exists('add_record', $this->navigate["$navigate"])){            
           if($this->data_capture_model->add_data($this->navigate["$navigate"]['add_record'])){
               $this->data['success']='Data succesfully added';  
           }else{
               $this->data['error']='Data not captured';
           }
        }
        // Update data to MySQL
        if($this->input->post('update_record') != NULL && array_key_exists('update_record', $this->navigate["$navigate"])){           
           if($this->data_capture_model->add_data($this->navigate["$navigate"]['update_record'], FALSE)){
               $this->data['success']='Data succesfully captured';  
           }else{
               $this->data['error']='Data not captured';
           }
        }

        // Get data for view
        if(array_key_exists('data_source', $this->navigate["$navigate"])){
            $this->data['page_name'] = $this->navigate[$navigate]['page_name'];
			$filters = $this->host_names[$headers['Host']]['filters'] ? $this->host_names[$headers['Host']]['filters'] : false;
			$data_sources = array();
			$data_sources = $this->navigate["$navigate"]['data_source'];            
			$data = $this->get_data_model->get_data($data_sources, $filters);            
            foreach($data as $key => $value){
                $this->data["$key"] = $value;
            }
            									
        }
       
       // Add data to session.
       $session_data = array();
       if(array_key_exists('session_record', $this->navigate["$navigate"])){
           $session_data = $this->get_data_model->get_data($this->navigate[$navigate]['session_record']);
           if($session_data){
               foreach($this->navigate[$navigate]['session_record'] as $session_record){
                   if($session_data[$session_record]){
                       foreach($session_data[$session_record][0] as $key => $value){
                            $this->session->set_userdata("$key", "$value");
                       }
                   }                    
               }               
           }
       }
       
       $this->load->view($this->navigate[$navigate]['header']);
       $this->load->view($this->navigate[$navigate]['left_nav']);
       $this->load->view($this->navigate[$navigate]['page'], $this->data);
       $this->load->view($this->navigate[$navigate]['footer']);
       
    }
}

?>