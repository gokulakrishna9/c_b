<?php
class Data_capture_model extends CI_Model{
    private $route = array(
        "route"=>array(
            "root_table" => "",
            "select_string" => "",
            "and_where_filters" => "",
            "session_filter" => "",
        ),
        "template"=>array(
            "root_table" => "",
            "select_string" => "",
            "simple_join" => "",                                // untested
            "and_where_filters" => "",
            "session_filter" => "",
        ),
        "quick_link"=>array(
            "fields" => array(
                "conference_id",
                "link_description",
                "link",
                "rank",
                "visible"),
            "root_table" => "quick_link",
            "session_fields" => array("conference_id")
        ),
        "quick_link_record"=>array(
            "fields" => array(
                "conference_id",
                "link_description",
                "link",
                "rank",
                "visible"),
            "root_table" => "quick_link",
            "and_where_filters" => array("link_id")
        ),
        "nav_add_attendee_description"=>array(
            "fields" => array(
               "conference_id",
                "attendee_description",
                "title",
                "visible",
                "rank"),
            "root_table" => "attendee_description",            
            "session_fields" => array("conference_id")
        ),
        "nav_add_attendee_description_record"=>array(
            "fields" => array(
                "attendee_description",
                "title",
                "visible",
                "rank"),
            "root_table" => "attendee_description",
            "and_where_filters" => array("attendee_description_id")
        ),
        "nav_add_conference_description"=>array(
            "fields" => array(
                "conference_url",
                "conference_title",
                "conference_theme",
                "conference_description",
                "venue",
                "venue_lattitude",
                "venue_longitude",
                "contact_us",
                "venue_image",          // To be added to database.
                "conference_brochure",   // To be added to database.
                "map_key",
                "conference_brochure",
                "venue_image",
                "zone_name",
                "visible",
                "rank",
                "abstract_template"
            ),
            "session_fields" => array("company_id"),
            "root_table" => "conference_description",
            "file_fields" => array(
                "conference_description",
                "conference_brochure",
                "venue_image",
                "abstract_template"
            )
        ),
        "nav_add_conference_description_record"=>array(
            "fields" => array(
                    "conference_url",
                    "conference_title",
                    "conference_theme",
                    "conference_description",
                    "venue",
                    "venue_lattitude",
                    "venue_longitude",
                    "contact_us",
                    "venue_image",           // To be added to database.
                    "conference_brochure",   // To be added to database.
                    "map_key",
                    "conference_brochure",
                    "venue_image",
                    "zone_name",
                    "visible",
                    "rank",
                    "abstract_template"
                ),
            "root_table" => "conference_description",
            "file_fields" => array(
                "conference_description",
                "conference_brochure",
                "venue_image",
                "abstract_template"
            ),
            "session_fields" => array("company_id"),
            "and_where_filters" => array("conference_id")
        ),
        "nav_add_important_dates"=>array(
            "fields" => array(
                    "conference_id",
                    "date",
                    "title",
                    "description",
                    "rank",
                    "visible"
                ),
            "root_table" => "important_dates",
            "session_fields" => array("conference_id")
        ),
        "nav_add_important_dates_record"=>array(
            "fields" => array(
                    "date",
                    "title",
                    "description",
                    "rank",
                    "visible"
                ),
            "root_table" => "important_dates",
            "and_where_filters" => array("date_id")
        ),
        "nav_add_organizing_members"=>array(
            'fields'=>array(
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
            "root_table" => "organizing_members",          
            'session_fields'=>array(
                 "conference_id"
             ),
             'file_fields'=>array(
                 "organizing_members"
             )
        ),
        "nav_add_organizing_members_record"=>array(
            'fields'=>array(
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
            "root_table" => "organizing_members",
            "and_where_filters" => array("organizing_member_id")
        ),
        "nav_add_exibitor"=>array(
            'fields'=>array(
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
            "root_table" => "exibitors",          
            'session_fields'=>array(
                 "conference_id"
             ),
             'file_fields'=>array(
                 "organizing_members"
             )
        ),
        "nav_add_exibitor_record"=>array(
            'fields'=>array(
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
            "root_table" => "exibitors",
            "and_where_filters" => array("exibitor_id"),
            'file_fields'=>array(
                 "organizing_members"
             )
        ),
        "nav_add_sponcer"=>array(
            'fields'=>array(
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
            "root_table" => "sponcers",          
            'session_fields'=>array(
                 "conference_id"
             ),
             'file_fields'=>array(
                 "organizing_members"
             )
        ),
        "nav_add_sponcer_record"=>array(
            'fields'=>array(
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
            "root_table" => "sponcers",
            "and_where_filters" => array("sponcer_id"),            
             'file_fields'=>array(
                 "organizing_members"
             )
        ),
        "nav_add_speaker"=>array(
            'fields'=>array(
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
            "root_table" => "speakers",          
            'session_fields'=>array(
                 "conference_id"
             ),
             'file_fields'=>array(
                 "organizing_members"
             )
        ),
        "nav_add_speaker_record"=>array(
            'fields'=>array(
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
            "root_table" => "speakers",
            "and_where_filters" => array("speaker_id"),
            'file_fields'=>array(
                 "organizing_members"
             )
        ),
        "nav_add_program_schedule"=>array(
            'fields'=>array(
                "conference_id",
                "day",                
                "session_date",
                "session_start",
                "session_end",
                "session_description",
                "rank",
                "visible"
            ),   
            'root_table' => 'program_schedule',         
            'session_fields'=>array(
                 "conference_id"
             ),
        ),
        "nav_add_program_schedule_record"=>array(
            'fields'=>array(
                "day",                
                "session_date",
                "session_start",
                "session_end",
                "session_description",
                "rank",
                "visible"
            ),   
            'root_table' => 'program_schedule',
            "and_where_filters" => array("schedule_id")
        ),
        "nav_add_purpose_of_conference"=>array(
            "fields" => array(
                "conference_id",
                "purpose_description",
                "purpose_rank",
                "rank",
                "title",
                "visible"
                ),
            "root_table" => "purpose_of_conference",
            "session_fields" => array('conference_id')
        ),
        "nav_add_purpose_of_conference_record"=>array(
            "fields" => array(
                "purpose_description",
                "purpose_rank",
                "rank",
                "title",
                "visible"),
            "root_table" => "purpose_of_conference",
            "and_where_filters" => array("purpose_id")
        ),
        "nav_add_scientific_sessions"=>array(
            "fields" => array(
                "conference_id",
                "session_id",
                "session_description",
                "session_name",
                "session_date",
                "start_time",
                "end_time",
                "rank",
                "title",
                "visible"),
            "root_table" => "scientific_sessions",
            "session_fields" => array("conference_id")
        ),
        "nav_add_scientific_sessions_record"=>array(
            "fields" => array(
                "conference_id",
                "session_id",
                "session_description",
                "session_name",
                "session_date",
                "start_time",
                "end_time",
                "rank",
                "title",
                "visible"),
            "root_table" => "scientific_sessions",
            "and_where_filters" => array("session_id")
        ),
        "nav_add_special_features"=>array(
            "fields" => array(
                "conference_id",
                "feature_id",
                "feature_description",
                "rank",
                "title",
                "visible"),
            "root_table" => "special_features",
            "session_fields" => array("conference_id")
        ),
        "nav_add_special_features_record"=>array(
            "fields" => array(
                "conference_id",
                "feature_id",
                "feature_description",
                "rank",
                "title",
                "visible"),
            "root_table" => "special_features",
            "and_where_filters" => array("feature_id")
        ),
        "about_company_record"=>array(
            "root_table" => "about_company",
            "fields" => array(
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
            ),
            "and_where_filters" => array("company_id")
        ),
        "about_company"=>array(
            "root_table" => "about_company",
            "fields" => array(
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
        "company_image"=>array(
            "root_table" => "carousel_images_company_site",
            "fields" => array(
                "image_id",
                "title",
                "company_id",
                "image_url",
                "paragraph",
                "rank",
                "visible"
            ),
            "file_fields" => array("carousel_images_company_site"),
            "session_fields" => array("company_id")
        ),
        "company_image_record"=>array(
            "root_table" => "carousel_images_company_site",
            "fields" => array(
                "image_id",
                "title",
                "company_id",
                "image_url",
                "paragraph",
                "rank",
                "visible"
            ),
            "and_where_filters" => array("image_id"),
            "file_fields" => array("carousel_images_company_site")
        ),
        "users"=>array(
            "root_table" => "users",
            "fields" => array(
                "user_name",
                "company_id",
                "first_name",
                "last_name",
                "password",
                "enable",
                "rank",
                "visible"
            ),
            "session_fields" => array("company_id")
        ),
        "users_record"=>array(
            "root_table" => "users",
            "fields" => array(
                "user_name",
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
        "journals"=>array(
            "root_table" => "journals",
            "fields" => array(
                "journal_id",
                "first_name",
                "last_name",
                "designation",
                "institute",
                "country_id",
                "biography",
                "title",
                "journal_url",
                "rank",
                "visible"
            ),
            "session_fields" => array("conference_id", "company_id"),
            "file_fields" => array("journal_url")
        ),
        "journal_record"=>array(
            "root_table" => "journals",
            "fields" => array(
                "journal_id",
                "first_name",
                "last_name",
                "designation",
                "institute",
                "country_id",
                "biography",
                "title",
                "journal_url",
                "rank",
                "visible"
            ),
            "and_where_filters" => array("journal_id"),
            "file_fields" => array("journal_url")            
        ),
        "abstracts"=>array(
            "root_table" => "abstracts",
            "fields" => array(
                "abstract_id",
                "first_name",
                "last_name",
                "designation",
                "institute",
                "country_id",
                "biography",
                "photo_url",
                "rank",
                "title",
                "visible"
            ),
            "session_fields" => array("conference_id"),
            "file_fields" => array("abstract_url")
        ),
        "abstract_record"=>array(
            "root_table" => "abstracts",
            "fields" => array(
                "abstract_id",
                "first_name",
                "last_name",
                "designation",
                "institute",
                "country_id",
                "biography",
                "photo_url",
                "rank",
                "title",
                "visible"
            ),
            "and_where_filters" => array("abstract_id"),
            "file_fields" => array("abstract_url")            
        ),
        "payment_group_conference"=>array(
            "root_table" => "payment_group",
            "fields" => array(
                "group_name",
                "rank",
                "visible"
            ),
            "session_fields" => array("conference_id")
        ),
        "payment_group_conference_record"=>array(
            "root_table" => "payment_group",
            "fields" => array(
                "group_name",
                "rank",
                "visible"
            ),
            "and_where_filters" => array("payment_group_id")          
        ),
        "payment_category"=>array(
            "root_table" => "payment_category",
            "fields" => array(
                "category_name",
                "valid_till",
                "rank",
                "visible"
            ),
            "session_fields" => array("conference_id")
        ),
        "payment_category_record"=>array(
            "root_table" => "payment_category",
            "fields" => array(
                "payment_category_id",
                "category_name",
                "valid_till",
                "rank",
                "visible"
            ),
            "and_where_filters" => array("payment_category_id")          
        ),
        "payment_offer"=>array(
            "root_table" => "payment_offer",
            "fields" => array(
                "group_name",
                "category_name",
                "package_name",
                "amount",
                "offer_description",
                "rank",
                "visible"
            ),
            "session_fields" => array("conference_id")
        ),
        "payment_offer_record"=>array(
            "root_table" => "payment_offer",
            "fields" => array(
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
        "payment_package"=>array(
            "root_table" => "payment_package",
            "fields" => array(
                "package_name",
                "terms_and_conditions",
                "rank",
                "visible"
            ),
            "session_fields" => array("conference_id")
        ),
        "payment_package_record"=>array(
            "root_table" => "payment_package",
            "fields" => array(
                "package_id",
                "package_name",
                "terms_and_conditions",
                "rank",
                "visible"
            ),
            "and_where_filters" => array("package_id")          
        ),
        "payment_term"=>array(
            "root_table" => "payment_term",
            "fields" => array(
                "term_name",
                "terms_and_conditions",
                "rank",
                "visible"
            ),
            "session_fields" => array("conference_id")
        ),
        "payment_term_record"=>array(
            "root_table" => "payment_term",
            "fields" => array(
                "term_id",
                "term_name",
                "terms_and_conditions",
                "rank",
                "visible"
            ),
            "and_where_filters" => array("term_id")          
        ),
        "conference_image"=>array(
            "root_table" => "carousel_images_conference_site",
            "fields" => array(
                "image_id",
                "title",
                "conference_id",
                "image_url",
                "paragraph",
                "rank",
                "visible"
            ),
            "file_fields" => array("carousel_images_conference_site"),
            "session_fields" => array("conference_id")
        ),
        "conference_image_record"=>array(
            "root_table" => "carousel_images_conference_site",
            "fields" => array(
                "image_id",
                "title",
                "conference_id",
                "image_url",
                "paragraph",
                "rank",
                "visible"
            ),
            "and_where_filters" => array("image_id"),
            "file_fields" => array("carousel_images_conference_site")
        ),
        "add_markets"=>array(
            "fields" => array(
                "conference_id",
                "market_id",
                "market_description",
                "rank",
                "title",
                "visible"),
            "root_table" => "special_markets",
            "session_fields" => array("conference_id")
        ),
        "add_markets_record"=>array(
            "fields" => array(
                "conference_id",
                "market_id",
                "market_description",
                "title",
                "rank",
                "visible"),
            "root_table" => "special_markets",
            "and_where_filters" => array("market_id")
        ),
        "add_terms_and_conditions"=>array(
            "fields" => array(
                "company_id",
                "term_id",
                "term_name",
                "terms_and_conditions",
                "rank",
                "visible"),
            "root_table" => "payment_term",
            "session_fields" => array("company_id")
        ),
        "terms_and_conditions_record"=>array(
            "fields" => array(
                "company_id",
                "term_id",
                "term_name",
                "terms_and_conditions",
                "rank",
                "visible"),
            "root_table" => "payment_term",
            "and_where_filters" => array("term_id")
        )
    );

    private $file_fields = array(
        "about_company"=>array(
            "fields"=>array(
                "field_name"=>"company_logo",
                "configuration"=>array(
                    "upload_path"=>"./assets/company_site_images/",
                    "allowed_types"=>"gif|jpg|png",
                    "file_ext_tolower"=>"TRUE",
                    "overwrite"=>"TRUE",
                    "max_size"=>"512",
                    "max_width"=>"1920",
                    "max_height"=>"1200",
                    "min_width"=>"1024",
                    "min_height"=>"768"
                )
            )
        ),
        "carousel_images_company_site"=>array(
            "fields"=>array(
                "field_name"=>"image_url",
                "configuration"=>array(
                    "upload_path"=>"./assets/company_site_images/",
                    "allowed_types"=>"gif|jpg|png",
                    "file_ext_tolower"=>"TRUE",
                    "overwrite"=>"TRUE",
                    "max_size"=>"512",
                    "max_width"=>"1920",
                    "max_height"=>"1200",
                    "min_width"=>"1024",
                    "min_height"=>"768"
                )
            )
        ),
        "carousel_images_conference_site"=>array(
            "fields"=>array(
                "field_name"=>"image_url",
                "configuration"=>array(
                    "upload_path"=>"./assets/company_site_images/",
                    "allowed_types"=>"gif|jpg|png",
                    "file_ext_tolower"=>"TRUE",
                    "overwrite"=>"TRUE",
                    "max_size"=>"512",
                    "max_width"=>"1920",
                    "max_height"=>"1200",
                    "min_width"=>"1024",
                    "min_height"=>"768"
                )
            )
        ),
        "venue_image"=>array(
            "fields"=>array(
                "field_name"=>"venue_image",
                "configuration"=>array(
                    "upload_path"=>"./assets/company_site_images/",
                    "allowed_types"=>"gif|jpg|png",
                    "file_ext_tolower"=>"TRUE",
                    "overwrite"=>"TRUE",
                    "max_size"=>"512",
                    "max_width"=>"1920",
                    "max_height"=>"1200",
                    "min_width"=>"100",
                    "min_height"=>"100"
                )
            )
        ),
        "conference_description"=>array(
            "fields"=>array(
                "field_name"=>"conference_image",
                "configuration"=>array(
                    "upload_path"=>"./assets/company_site_images/",
                    "allowed_types"=>"gif|jpg|png",
                    "file_ext_tolower"=>"TRUE",
                    "overwrite"=>"TRUE",
                    "max_size"=>"512",
                    "max_width"=>"1920",
                    "max_height"=>"1200",
                    "min_width"=>"1024",
                    "min_height"=>"768"
                )
            )            
        ),
        "conference_image"=>array(
            "fields"=>array(
                "field_name"=>"conference_image",
                "configuration"=>array(
                    "upload_path"=>"./assets/company_site_images/",
                    "allowed_types"=>"gif|jpg|png",
                    "file_ext_tolower"=>"TRUE",
                    "overwrite"=>"TRUE",
                    "max_size"=>"512",
                    "max_width"=>"1920",
                    "max_height"=>"1200",
                    "min_width"=>"1024",
                    "min_height"=>"768"
                )
            )
        ),
        "organizing_members"=>array(
            "fields"=>array(
                "field_name"=>"photo_url",
                "configuration"=>array(
                    "upload_path"=>"./assets/company_site_images/",
                    "allowed_types"=>"gif|jpg|png",
                    "file_ext_tolower"=>"TRUE",
                    "overwrite"=>"TRUE",
                    "max_size"=>"512",
                    "max_width"=>"1920",
                    "max_height"=>"1200",
                    "min_width"=>"1024",
                    "min_height"=>"768"
                )
            )
        ),
        "conference_brochure"=>array(
            "fields"=>array(
            "field_name"=>"conference_brochure",
                "configuration"=>array(
                    "upload_path"=>"./assets/company_site_images/",
                    "allowed_types"=>"gif|jpg|png|chm|doc|dcom|docx|dot|dotx|hwp|odt|pdf|pub|rtf|xps|key|odp|pps|ppsx|ppt|pptm|pptx",
                    "file_ext_tolower"=>"TRUE",
                    "overwrite"=>"TRUE",
                    "max_size"=>"5120",
                    "remove_spaces"=>"TRUE"
                )
            )
        ),
        "journal_url"=>array(
            "fields"=>array(
            "field_name"=>"journal_url",
                "configuration"=>array(
                    "upload_path"=>"./assets/company_site_images/",
                    "allowed_types"=>'gif|jpg|png|chm|doc|dcom|docx|dot|dotx|hwp|odt|pdf|pub|rtf|xps|key|odp|pps|ppsx|ppt|pptm|pptx',
                    "file_ext_tolower"=>"TRUE",
                    "overwrite"=>"TRUE",
                    "max_size"=>"5120"
                )
            )
        ),
        "abstract_template"=>array(
            "fields"=>array(
            "field_name"=>"abstract_template",
                "configuration"=>array(
                    "upload_path"=>"./assets/company_site_images/",
                    "allowed_types"=>'gif|jpg|png|chm|doc|dcom|docx|dot|dotx|hwp|odt|pdf|pub|rtf|xps|key|odp|pps|ppsx|ppt|pptm|pptx',
                    "file_ext_tolower"=>"TRUE",
                    "overwrite"=>"TRUE",
                    "max_size"=>"1024"
                )
            )
        )
    );

    function __construct(){
        parent::__construct();
    }

    function add_data($route = FALSE, $mode = TRUE){        
        // Getting record, record set
        $record = $this->route["$route"]['root_table'];
        if(!$route){
            return false;
        }
        $input_data = array();
        
        // Build the data set
        // Getting data set, parameters set
        foreach($this->route[$route]['fields'] as $field){
            if($this->input->post($field) != NULL){
                $input_data[$field] = $this->input->post($field);
            }
        }
        
        if(array_key_exists('session_fields', $this->route["$route"])){
            $session_keys = array();
            $session_keys = $this->route["$route"]['session_fields'];
            foreach($session_keys as $session_key){              
                if($session_key != NULL && $this->session->has_userdata("$session_key")){
                    $input_data[$session_key] = $this->session->$session_key;
                }
            }
        }

        // Build the file set
        if(array_key_exists('file_fields', $this->route["$route"])){
            $file_field = $this->route["$route"]['file_fields'];
            foreach($file_field as $file){
                foreach($this->file_fields["$file"] as $field){
                    $this->load->library('upload');
                    $this->upload->initialize($field["configuration"]);
                    if($this->upload->do_upload($field["field_name"])){
                        $input_data[$field["field_name"]] = $this->upload->data('file_name');
                    }else{
                        $uploaded= $this->upload->display_errors();
                    }
                }
            }            
        }
        
        // Build and where filters
        $and_where_filters = array();
        if(array_key_exists("and_where_filters", $this->route["$route"])){
           $filters = $this->route["$route"]['and_where_filters'];
           foreach($filters as $filter){
               if($this->input->post("$filter") != NULL){
                   $and_where_filters[$filter] = $this->input->post("$filter");
               }else{
                   return false;
               }               
           } 
        }
        
        
        if(!empty($input_data)){
            if($mode){
                $this->db->insert($record, $input_data);
            }else if(!empty($and_where_filters)){
                $this->db->where($and_where_filters);
                $this->db->update("$record", $input_data);
            }
        }
        return true;
    }
}

?>