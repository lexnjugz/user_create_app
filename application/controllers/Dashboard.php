<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class dashboard extends CI_Controller
{
	
	 public function __construct()
     {
          parent::__construct();
          $this->load->helper('form');
          $this->load->helper('url');
          $this->load->helper('html');
          $this->load->database();
          $this->load->library('form_validation');
          $this->load->library('email');
          //load the login model
          $this->load->model('Users_model');
     }

	// Load view page
	public function index() {

		$this->load->view("Create_user");

	}

	public function new_user_registration() {

		// $this->load->library('form_validation');


			// $rules = array(
			// 	       array(
			// 	               'field' => 'firstname',
			// 	               'label' => 'firstname',
			// 	               'rules' => 'required'
			// 	       ),
			// 	       array(
			// 	               'field' => 'lastname',
			// 	               'label' => 'lastname',
			// 	               'rules' => 'required'
			// 	       ),
			// 	       array(
			// 	               'field' => 'username',
			// 	               'label' => 'username',
			// 	               'rules' => 'required'
			// 	       ),
			// 	       array(
			// 	               'field' => 'email',
			// 	               'label' => 'email',
			// 	               'rules' => 'required'
			// 	       ),
			// 			array(  
			// 			       'field' => 'password',
			// 			       'label' => 'password',
			// 			       'rules' => 'required'
			// 			),
			// 			array(
			// 	               'field' => 'confirm_password',
			// 	               'label' => 'confirm_password',
			// 	               'rules' => 'password'
			// 	               )
						
			// 			);

						// $this->form_validation->set_rules($rules);

						// if ($this->form_validation->run() == FALSE)
						// {
						// $this->load->view('Create_user');
						// }
					
				  //        else
					           {
						           	$config =	[
													'upload_path'	=> './assets/images/',
							            			'allowed_types' => 'gif|jpg|png|jpeg',
							            			'max_size'      => 10000,
							            			'max_width'     => 1080,
							            			'max_height'    => 1080
						            			];
						            $this->load->library('upload', $config);
						            $this->upload->initialize($config);
									if (!$this->upload->do_upload('profile_pic')) {
									    $error = array('error' => $this->upload->display_errors());
									    echo $error['error'];
									}
						  
						            $imgdata = $this->upload->data();
						            $img = $imgdata['file_name'];
						            
						                
						           $now = date('Y-m-d H:i:s');      
				                   $data = array(

				                   	'first_name'	=> set_value('firstname'),
				                	'last_name'	=> set_value('lastname'),
				                   	'phone'	=> set_value('phone'),
				                   	'email'	=> set_value('email'),
									'password'	=> set_value('password'),
									'created_at' => $now,
									'profile_pic' => $img,
									'user_type' => set_value("lsp")
									);
				                  
				                  

				                   $email = $data['email'];
				                   $phone = $data['phone'];
				                   $pass = $data['password'];

				                   $this->Users_model->registration($data);
				                   $this->sendmail($email,$phone,$pass);


				                   unset($config);

				                   $this->load->helper('string');
				                   
									$config = array(
												'useragent' => 'PHPMailer',
							                    'mailtype'  => 'html',
												'protocol' => 'smtp',
												'smtp_host' => 'ssl://smtp.gmail.com',
												'smtp_port' => 465,
												'smtp_timeout'=> 15,
												'smtp_user' => stripslashes('morryzregz100@gmail.com'),
												'smtp_pass' => stripslashes('0723686428'),					
												'charset'  => 'iso-8859-1'
											); 
								   ini_set("SMTP", "ssl://smtp.gmail.com");
								   ini_set("smtp_port", "465");
								   $this->load->library('email', $config);
								   $this->email->initialize($config);
								   $this->email->set_newline("\r\n");
								   $this->email->from('app@lexnjugz.co.ke', 'App');
								   $this->email->to($email);
								   $this->email->subject('Successful Registration');
								   $this->email->message('Your credentials are:'."\r\n".$phone."\r\n".$pass."\r\n");
								  $test = $this->email->send();
								  echo $this->email->print_debugger();

						var_dump($test);
						die();

									
									redirect('List_users');

									
						        }
						}
	
	function sendmail()
{
         
								$config = array(
												'useragent' => 'PHPMailer',
							                    'mailtype'  => 'html',
												'protocol' => 'smtp',
												'smtp_host' => 'ssl://smtp.gmail.com',
												'smtp_port' => '465',
												// 'smtp_timeout'=> 5,
												'smtp_user' => 'morryzregz100@gmail.com',
												'smtp_pass' => '0723686428',					
												'charset'  => 'iso-8859-1'
											); 
								   ini_set("SMTP", "ssl://smtp.gmail.com");
								   ini_set("smtp_port", "465");
								   $this->load->library('email', $config);
								   $this->email->initialize($config);
								   $this->email->set_newline("\r\n");
								   $this->email->from('app@lexnjugz.co.ke', 'App');
								   $this->email->to('morryzregz100@gmail.com');
								   $this->email->subject('Successful Registration');
								   $this->email->message('Your credentials are:');
								  $test = $this->email->send();
   
}

}

?>