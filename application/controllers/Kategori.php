<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends Admin_Controller
{
	Public function __construct()
	{
		parent::__construct();
		$this->not_logged_in();
		$this->data['page_title'] = 'Kategori';
		$this->load->model('Kategori_model');
	}

	Public function index() {
		// if(!in_array('viewTabel', $this->permission)) {
		// 	redirect('dashboard', 'refresh');
		// }

		$result = $this->Kategori_model->get_kategoriData();
		$this->data['results'] = $result;
		$this->render_template('kategori/index', $this->data);
	}	

	public function fetch_kategoriData()
	{
		$result = array('data' => array());
		$data = $this->Kategori_model->get_kategoriData();
		foreach ($data as $key => $value) {

			$buttons = '';
			//if(in_array('viewTabel', $this->permission)) {
				$buttons .= '<button type="button" class="btn btn-default" onclick="edit_kategori('.$value['id'].')" data-toggle="modal" data-target="#edit_kategoriModal"><i class="fa fa-pencil"></i></button>';	
			//}
			//if(in_array('delete_kategori', $this->permission)) {
				$buttons .= ' <button type="button" class="btn btn-default" onclick="remove_kategori('.$value['id'].')" data-toggle="modal" data-target="#remove_kategoriModal"><i class="fa fa-trash"></i></button>
				';
			//}				
			
			$result['data'][$key] = array(
				
				$value['name'],
				$value['keterangan'],
				$buttons
			);

		} 
		echo json_encode($result);
	}

	public function fetch_kategoriById($id)
	{
		if($id) {
			$data = $this->Kategori_model->get_kategoriData($id);
			echo json_encode($data);
		}
		return false;
	}

	public function create()
	{
		if(!in_array('create_kategori', $this->permission)) {
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
				'field' => 'keterangan',
				'label' => 'Keterangan',
				'rules' => 'trim|required'
			),
		);
		$this->form_validation->set_rules($config);

		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

        if ($this->form_validation->run() == TRUE) {
        	
			$data = array(
				
				'name' 				=> $this->input->post('name'),
				
				'keterangan' 				=> $this->input->post('keterangan'),
				
			);
        	$create = $this->Kategori_model->create($data);

        	if($create == true) {
        		$response['success'] = true;
        		$response['messages'] = 'Succesfully created';
        	}
        	else {
        		$response['success'] = false;
        		$response['messages'] = 'Error in the database while insert data!';			
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
		if(!in_array('update_kategori', $this->permission)) {
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
					'field' => 'keterangan',
					'label' => 'Keterangan',
					'rules' => 'trim|required'
				),
			);
			$this->form_validation->set_rules($config);
			$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

	        if ($this->form_validation->run() == TRUE) {
				$data = array(
					
					'name' 			=> $this->input->post('name'),
					
					'keterangan' 			=> $this->input->post('keterangan'),
					
				);
	        	$update = $this->Kategori_model->update($data, $id);
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
		if(!in_array('delete_kategori', $this->permission)) {
			redirect('dashboard', 'refresh');
		}
		
		$id = $this->input->post('id');
		$response = array();
		if($id) {

			$delete = $this->Kategori_model->remove($id);
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