<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portafolios extends CI_Controller {


	public function index()
	{
		$this->load->view('inicio/header');
		$this->load->view('portafolio/index');
		$this->load->view('inicio/footer');
	}
}
