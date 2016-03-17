<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'libraries/REST_Controller.php';

class Wpage extends REST_Controller {

	public function index(){
		$this->load->view('welcome_message');
	}
	
	public function index_get(){
	  // Display all books
	}

	public function index_post(){
	  // Create a new book
	}
}
