<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	
	class user_articles extends CI_Controller
	{
		
		function __construct()
		{
			parent:: __construct();

			$this->load->model('Users_model');
		}

		public function index()
		{
			
			$data['result'] = $this->Users_model->getUserarticles();
			$this->load->view('Articles',$data);
		}


		public function user_update($article_id,$data)
		{
			//$this->Users_model->update($article_id,$data);
			//redirect('User_articles');
			//$button = $_POST['button']; // will be the id of the button that was clicked
			$article_id = 'news_id';
			// do your code here.....
			$this->db->update('news',array('status'=>$data));
			$this->db->where(array('news_id='=> $article_id));
			//$this->Users_model->update($article_id,$data);

			redirect('User_articles');
		

			

		}

	}

	

?>