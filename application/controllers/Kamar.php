<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kamar extends Admin_Controller
{
	Public function __construct()
	{
		parent::__construct();
		$this->not_logged_in();
		$this->data['page_title'] = 'Kamar';
		$this->load->model('Kamar_model');
	}

	Public function index() {
		// if(!in_array('viewTabel', $this->permission)) {
		// 	redirect('dashboard', 'refresh');
		// }

		$result = $this->Kamar_model->get_kamarData();
		$this->data['results'] = $result;
		$this->render_template('kamar/index', $this->data);
	}	

	public function fetch_kamarData()
	{
		$result = array('data' => array());
		$data = $this->Kamar_model->get_kamarData();
		foreach ($data as $key => $value) {

			$kategori = $this->db->get_where('kategori', array('id'=>$value['kategori_id']))->row()->name;

			$buttons = '';
			//if(in_array('viewTabel', $this->permission)) {
				$buttons .= '<button type="button" class="btn btn-default" onclick="edit_kamar('.$value['id'].')" data-toggle="modal" data-target="#edit_kamarModal"><i class="fa fa-pencil"></i></button>';	
			//}
			//if(in_array('delete_kamar', $this->permission)) {
				$buttons .= ' <button type="button" class="btn btn-default" onclick="remove_kamar('.$value['id'].')" data-toggle="modal" data-target="#remove_kamarModal"><i class="fa fa-trash"></i></button>
				';
			//}				
			
			$result['data'][$key] = array(
				
				$value['name'],
				$value['harga'],
				$kategori,
				$value['fasilitas'],
				$value['tipe_bayar'],
				$value['status_sewa'],
				$value['status_bayar'],
				$value['tgl_terisi'],
				$value['tgl_habis'],
				$buttons
			);

		} 
		echo json_encode($result);
	}

	public function fetch_kamarById($id)
	{
		if($id) {
			$data = $this->Kamar_model->get_kamarData($id);
			echo json_encode($data);
		}
		return false;
	}

	public function create()
	{
		if(!in_array('create_kamar', $this->permission)) {
			redirect('dashboard', 'refresh');
		}
		$response = array();
		
		// setup config validation
		$config = array(
			
			array(
				'field' => 'name',
				'label' => 'Name',
				'rules' => 'trim|required'
			),
			array(
				'field' => 'harga',
				'label' => 'Harga',
				'rules' => 'trim|required'
			),
			array(
				'field' => 'kategori_id',
				'label' => 'Kategori Id',
				'rules' => 'trim|required'
			),
			array(
				'field' => 'fasilitas',
				'label' => 'Fasilitas',
				'rules' => 'trim|required'
			),
			array(
				'field' => 'tipe_bayar',
				'label' => 'Tipe Bayar',
				'rules' => 'trim|required'
			),
			array(
				'field' => 'status_sewa',
				'label' => 'Status Sewa',
				'rules' => 'trim|required'
			),
			array(
				'field' => 'status_bayar',
				'label' => 'Status Bayar',
				'rules' => 'trim|required'
			),

		);
		$this->form_validation->set_rules($config);
		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
        if ($this->form_validation->run() == TRUE) {
			$data = array(
				'name' 				=> $this->input->post('name'),
				'harga' 				=> $this->input->post('harga'),
				'kategori_id' 				=> $this->input->post('kategori_id'),
				'fasilitas' 				=> $this->input->post('fasilitas'),
				'tipe_bayar' 				=> $this->input->post('tipe_bayar'),
				'status_sewa' 				=> $this->input->post('status_sewa'),
				'status_bayar' 				=> $this->input->post('status_bayar'),			
			);
        	$create = $this->Kamar_model->create($data);
        	if($create == true) {
        		$response['success'] = true;
        		$response['messages'] = 'Sukses disimpan';
        	}
        	else {
        		$response['success'] = false;
        		$response['messages'] = 'Gagal, periksa kembali data yang diinput !';			
        	}
        }
        else {
        	$response['success'] = false;
        	foreach ($_POST as $key => $value) {
        		$response['messages'][$key] = form_error($key);
        	}
        }
        echo json_encode($response);
	}


	public function update($id)
	{
		if(!in_array('update_kamar', $this->permission)) {
			redirect('dashboard', 'refresh');
		}
		$response = array();
		if($id) {
			$config = array(
				
				array(
					'field' => 'name',
					'label' => 'Name',
					'rules' => 'trim|required'
				),
				array(
					'field' => 'harga',
					'label' => 'Harga',
					'rules' => 'trim|required'
				),
				array(
					'field' => 'kategori_id',
					'label' => 'Kategori Id',
					'rules' => 'trim|required'
				),
				array(
					'field' => 'fasilitas',
					'label' => 'Fasilitas',
					'rules' => 'trim|required'
				),
				array(
					'field' => 'tipe_bayar',
					'label' => 'Tipe Bayar',
					'rules' => 'trim|required'
				),
				array(
					'field' => 'status_sewa',
					'label' => 'Status Sewa',
					'rules' => 'trim|required'
				),
				array(
					'field' => 'status_bayar',
					'label' => 'Status Bayar',
					'rules' => 'trim|required'
				),
				array(
					'field' => 'tgl_terisi',
					'label' => 'Tgl Terisi',
					'rules' => 'trim|required'
				),
				array(
					'field' => 'tgl_habis',
					'label' => 'Tgl Habis',
					'rules' => 'trim|required'
				),
			);
			$this->form_validation->set_rules($config);
			$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

	        if ($this->form_validation->run() == TRUE) {
				$data = array(
					
					'name' 			=> $this->input->post('name'),
					
					'harga' 			=> $this->input->post('harga'),
					
					'kategori_id' 			=> $this->input->post('kategori_id'),
					
					'fasilitas' 			=> $this->input->post('fasilitas'),
					
					'tipe_bayar' 			=> $this->input->post('tipe_bayar'),
					
					'status_sewa' 			=> $this->input->post('status_sewa'),
					
					'status_bayar' 			=> $this->input->post('status_bayar'),
					
					'tgl_terisi' 			=> $this->input->post('tgl_terisi'),
					
					'tgl_habis' 			=> $this->input->post('tgl_habis'),
					
				);
	        	$update = $this->Kamar_model->update($data, $id);
	        	if($update == true) {
	        		$response['success'] = true;
	        		$response['messages'] = 'Succesfully updated';
	        	}
	        	else {
	        		$response['success'] = false;
	        		$response['messages'] = 'Error in the database while updated data';			
	        	}
	        }
	        else {
	        	$response['success'] = false;
	        	foreach ($_POST as $key => $value) {
	        		$response['messages'][$key] = form_error($key);
	        	}
	        }
		}
		else {
			$response['success'] = false;
    		$response['messages'] = 'Error please refresh the page again!!';
		}
		echo json_encode($response);
	}

	
	public function remove()
	{
		if(!in_array('delete_kamar', $this->permission)) {
			redirect('dashboard', 'refresh');
		}
		
		$id = $this->input->post('id');
		$response = array();
		if($id) {

			$delete = $this->Kamar_model->remove($id);
			if($delete == true) {
				$response['success'] = true;
				$response['messages'] = "Successfully removed";	
			}
			else {
				$response['success'] = false;
				$response['messages'] = "Error in the database while removing data";
			}
		}
		else {
			$response['success'] = false;
			$response['messages'] = "Refresh the page again!!";
		}
		echo json_encode($response);
	}

}
?>