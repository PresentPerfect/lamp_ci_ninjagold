<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set("America/Los_Angeles");
	
	class Mains extends CI_Controller
	{
		protected $gold,$total_gold,$message;

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
			$this->load->view('view_main');
		}

		public function process_money()
		{
			if(!$this->session->userdata('total_gold'))
			{
				$this->total_gold=0;
			}
			else
			{
				$this->total_gold = $this->session->userdata('total_gold');
			}

			if ($this->input->post('building')=='farm') 
			{
				$this->gold = rand(10,20);
			}

			if ($this->input->post('building')=='cave') 
			{
				$this->gold = rand(5,10);
			}

			if ($this->input->post('building')=='house') 
			{
				$this->gold = rand(2,5);
			}

			if ($this->input->post('building')=='casino') 
			{
				$this->gold = rand(-50,50);
			}

			echo "This gold ". $this->gold .'<br>';
			echo "This total gold is ". $this->total_gold .'<br>';

			$this->total_gold += $this->gold;
			echo "The new total gold is ".$this->total_gold.'<br>';

			$this->session->set_userdata('total_gold', $this->total_gold);
			var_dump($this->session->all_userdata());

			
			if ($this->gold < 0)
			{
				$this->message = "<p class='text-danger'>Entered a ".$this->input->post('building')." and lost ".($this->gold*-1)." golds...Ouch.</p>";
			}
			else
			{
				$this->message = 'Earned '.$this->gold.' golds from the '.$this->input->post('building').'!<br>';
			}
			
			echo '$this->message is '. $this->message;

			$this->message .= $this->session->userdata('message');

			$this->session->set_userdata('message',$this->message);
			var_dump($this->session->all_userdata());
			// die();

			redirect('/');			
		}

		public function reset()
		{
			$this->session->sess_destroy();
			redirect('/');
		}
	}

?>