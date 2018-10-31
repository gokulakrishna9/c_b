<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	private $navigate = array(
        "welcome"=>array(
			"header"=>"empty",
            "left_nav"=>"empty",
            "page"=>"welcome_message",
            "footer"=>"empty",                        
            "page_name" => "",
            "data_source" => array(
                "conference_record",
                "conference_purpose_list",               
                "important_dates_list",
                "organizing_member_list",
                "program_schedule_list",
                "conference_purpose_list",
                "quick_link_list",
                "scientific_sessions_list",
                "feature_description_list",
                "attendee_description_list",
                "sponcer_list",
	            "exibitor_list",
	            "speaker_list",
                "market_list",
                "journals_list",
                "conference_images_list"
            )
        ),
        "company"=>array(
			"header"=>"empty",
            "left_nav"=>"empty",
            "page"=>"landing_page",
            "footer"=>"empty",                        
            "page_name" => "",
            "data_source" => array(
                "conferences_list",
                "about_company_record",
                // "journals",
                // "membership",
                // "faq"
            )
        ),
		"sites_hosted" =>array(
			"data_source" => array(
                "conference_urls", "company_url_list"
            )
		),
		"login"=>array(
            "header"=>"common_pages/staff_login_header",
            "left_nav"=>"empty",
            "page"=>"staff_pages/staff_login",
            "footer"=>"empty"
        )
    );

	private $access = false;
	private $site_filter = array();
	function __construct(){
		parent::__construct();
		$headers = $this->input->request_headers();
        $company = true;
		if((array_key_exists('Host', $headers))){
			$this->load->model('get_data_model');
			$data_sources = array();
			$data_sources = $this->navigate['sites_hosted']['data_source'];            
			$data = $this->get_data_model->get_data($data_sources, false);
			foreach($data["conference_urls"] as $key => $value){
				if($value->conference_url == $headers['Host']){
					$this->site_filter["conference_id"] = $value->conference_id;
					$this->access = "welcome";
                    $company = false;
					break;
				}				
			}
            if($company){
                foreach($data["company_url_list"] as $key => $value){
                    if($value->company_url == $headers['Host']){
                        $this->site_filter["company_id"] = $value->company_id;
                        $this->site_filter["visible"] = 'YES';
                        $this->access = "company";
                        break;
                    }else{
                        $this->access = false;
                    }				
			    }
            }            
		}		
	}
	
	public function index(){
		if(!$this->access){
			show_404();
			return;
		}
		$navigate = $this->access;
        
        $this->data['empty'] = '';

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
			$data_sources = array();
			$data_sources = $this->navigate["$navigate"]['data_source'];            
			$data = $this->get_data_model->get_data($data_sources, $this->site_filter);
			foreach($data as $key => $value){
				$this->data["$key"] = $value;
			}						
        }
       
        // Captcha image, set in session
        $captcha_word = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 8);
        $this->session->set_userdata("captcha_word", "$captcha_word");        
        $captcha_config = array(   
            'word'          => $captcha_word,
            'img_path'	    => './assets/captcha/',
            'font_path'     => './assets/captcha/texb.ttf',
            'img_url'	    => base_url().'assets/captcha/',                
            'img_width'	    => '250',
            'img_height'    => 90,
            'expiration'    => 7200,
            'font_size'     => 32,
            // White background and border, black text and red grid
            'colors'         => array(
                'background' => array(255, 255, 255),
                'border'     => array(255, 255, 255),
                'text'       => array(0, 0, 0),
                'grid'       => array(255, 40, 40)
           )
       );        
       $this->load->helper('captcha');
       $cap_link = create_captcha($captcha_config);
       $this->data['image'] = $cap_link['image'];
       
       $this->load->view($this->navigate[$navigate]['header']);
       $this->load->view($this->navigate[$navigate]['left_nav']);
       $this->load->view($this->navigate[$navigate]['page'], $this->data);
       $this->load->view($this->navigate[$navigate]['footer']);     
    }

	public function staff_login(){
		$headers = $this->input->request_headers();
		$navigate = '';
		if(!(array_key_exists('Host', $headers) && $headers['Host'] === "openaccounting.in")){
			show_404();
			return;
		}
	   if($this->session->logged_in == 'YES'){
			$this->load->view('staff_pages/common_pages/staff_header');
			$this->load->view('staff_pages/common_pages/company_leftnav');
			$this->load->view('staff_pages/company_site_updation/add_about_company');
        //  echo json_encode(array ('logged_in' => true));
            return;
       }else {
		   $this->load->model('user_authentication_model');
		   if($this->user_authentication_model->authenticate_staff()){
				$this->load->view('staff_pages/common_pages/staff_header');
				$this->load->view('staff_pages/common_pages/company_leftnav');
				$this->load->view('staff_pages/company_site_updation/add_about_company');
		   }else{
				$this->load->view('common_pages/staff_login_header');
				$this->load->view('staff_pages/staff_login');
		   }
	   }
	}

    public function logout(){
        $this->session->sess_destroy();
        $this->load->view('common_pages/staff_login_header');
		$this->load->view('staff_pages/staff_login');
    }

    public function register(){
        // Check the trasaction status.
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'smtp.worldchemistryconference.com',
            'smtp_port' => 465,
            'smtp_user' => 'transaction_alert@worldchemistryconference.com', // change it to yours
            'smtp_pass' => '_@$#tagcfCdh4', // change it to yours
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
        );
        $this->load->library('email');
        $this->load->library('email', $config);
        $this->email->from('transaction_alert@worldchemistryconference.com', "Admin Team");
        $this->email->to("gokulakrishna9@gmail.com");
       // $this->email->cc("testcc@domainname.com");
        $this->email->subject("This is test subject line");
        $this->email->message("Mail sent test message...");
   
        $data['message'] = "Sorry Unable to send email..."; 
        if($this->email->send()){     
            $data['message'] = "Mail sent...";   
        } 
       
        // forward to index page
        var_dump($data); 
    }

    public function paytm_payment(){

    }

    public function paypal_payment(){
        
    }
}
