<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set("America/Los_Angeles");
	
	class Main extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			// $this->output->enable_profiler(TRUE);
			// $this->output->enable_profiler(TRUE);
			// $this->output->set_header("HTTP/1.0 200 OK");
			// $this->output->set_header("HTTP/1.1 200 OK");
			// $this->output->set_header('Last-Modified: '.gmdate('D, d M Y H:i:s', time()).' GMT');
			// $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate");
			// $this->output->set_header("Cache-Control: post-check=0, pre-check=0");
			// $this->output->set_header("Pragma: no-cache");
			//$this->load->model('');
		}

		public function index()
		{
			
		}
	}

?>