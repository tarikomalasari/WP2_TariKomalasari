<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class contoh1 extends CI_Controller {

	
	public function index()
	{
		$this->load->view('contoh1_message');
	}
}
