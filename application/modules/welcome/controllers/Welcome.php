<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends MX_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model(['M_Welcome']);
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}
}
