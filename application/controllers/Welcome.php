<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class React extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library('reactjs');
	}
	public function index(){
		$this->load->view('index');
	}
}
