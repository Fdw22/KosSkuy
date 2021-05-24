<?php 

class Front extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()

	{
		$this->load->view('frontend/home');
	}

	public function kategori()
	{

		$this->load->view('frontend/kategori');

	}

	public function kamar()
	{

		$this->load->view('frontend/kamar');

	}

}