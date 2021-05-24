<?php 

class Dashboard extends Admin_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->not_logged_in();
		$this->data['page_title'] = 'Dashboard';
	}

	/* 
	* It only redirects to the manage category page
	* It passes the total product, total paid orders, total users, and total stores information
	into the frontend.
	*/
	public function index()
	{

		$this->data['total_kategori'] = $this->db->get('kategori')->num_rows();
		$this->data['total_kamar'] = $this->db->get('kamar')->num_rows();
		$this->data['total_kosong'] = $this->db->get_where('kamar', array('status_sewa'=> 'kosong'))->num_rows();
		$this->data['total_terisi'] = $this->db->get_where('kamar', array('status_sewa'=> 'terisi'))->num_rows();

		$user_id = $this->session->userdata('id');
		$is_admin = ($user_id == 1) ? true :false;
		$this->data['is_admin'] = $is_admin;
		$this->render_template('dashboard', $this->data);
	}
}