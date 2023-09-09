<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portafolios extends CI_Controller {


	public function index()
	{
		$this->load->view('inicio/header');
		$this->load->view('portafolio/index');
		$this->load->view('inicio/footer');
	}
	public function port1()
	{
		$this->load->view('inicio/header');
		$this->load->view('portafolio/portafolio');
		$this->load->view('inicio/footer');
	}
	public function port2()
	{
		$this->load->view('inicio/header');
		$this->load->view('portafolio/portafolio1');
		$this->load->view('inicio/footer');
	}
	public function port3()
	{
		$this->load->view('inicio/header');
		$this->load->view('portafolio/portafolio2');
		$this->load->view('inicio/footer');
	}
	public function port4()
	{
		$this->load->view('inicio/header');
		$this->load->view('portafolio/portafolio3');
		$this->load->view('inicio/footer');
	}
	public function port5()
	{
		$this->load->view('inicio/header');
		$this->load->view('portafolio/portafolio4');
		$this->load->view('inicio/footer');
	}
	public function port6()
	{
		$this->load->view('inicio/header');
		$this->load->view('portafolio/portafolio5');
		$this->load->view('inicio/footer');
	}
}
