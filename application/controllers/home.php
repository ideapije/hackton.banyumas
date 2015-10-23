<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Home extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->enqueue->enqueue_css('bootstrap.min');
		$this->enqueue->enqueue_js('jquery-1.11.1.min');
		$this->enqueue->enqueue_js('bootstrap.min');
		$this->enqueue->loadcss();
		$this->enqueue->loadjs();
	}

	public function index(){
		$this->load->view('templates/contents');
	}
}

