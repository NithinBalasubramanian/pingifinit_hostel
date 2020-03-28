<?php
class Admin extends CI_Controller{
	public $CI = NULL;
	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->CI = & get_instance();
	}
	
	public function index()
		{
				$this->load->view('index.php');
		}
	
}