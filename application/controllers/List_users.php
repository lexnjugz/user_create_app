<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	
	class list_users extends CI_Controller
	{
		
		function __construct()
		{
			parent:: __construct();

			$this->load->model('Users_model');
		}

		public function index()
		{
			
			$data['result'] = $this->Users_model->getUsers();
			$this->load->view('User_activity',$data);
		}


	}

	

?>