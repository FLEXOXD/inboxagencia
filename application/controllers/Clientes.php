<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {


	public function index()
	{
		$this->load->view('inicio/header');
		$this->load->view('cliente/index');
		$this->load->view('inicio/footer');
	}
}
