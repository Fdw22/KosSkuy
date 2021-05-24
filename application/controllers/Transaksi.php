<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends Admin_Controller
{
	Public function __construct()
	{
		parent::__construct();
		$this->not_logged_in();
		$this->data['page_title'] = 'Transaksi';
		$this->load->model('Transaksi_model');
	}

	Public function index() {
		// if(!in_array('viewTabel', $this->permission)) {
		// 	redirect('dashboard', 'refresh');
		// }
		$result = $this->Transaksi_model->get_transaksiData();
		$this->data['results'] = $result;
		$this->render_template('transaksi/index', $this->data);
	}	

	public function fetch_transaksiData()
	{
		$result = array('data' => array());
		$data = $this->Transaksi_model->get_transaksiData();
		foreach ($data as $key => $value) {

			$buttons = '';
			$result['data'][$key] = array(
				
				$value['tgl_transaksi'],
				$value['nama'],
				$value['no_ktp'],
				$value['no_telp'],
				$value['orangtua'],
				$value['no_telp_ortu'],
				$value['alamat_ortu'],
				$value['kamar_id'],
				$value['bayar'],
				$buttons
			);

		} 
		echo json_encode($result);
	}

	public function fetch_transaksiById($id)
	{
		if($id) {
			$data = $this->Transaksi_model->get_transaksiData($id);
			echo json_encode($data);
		}
		return false;
	}

	public function create()
	{
		if(!in_array('create_transaksi', $this->permission)) {
			redirect('dashboard', 'refresh');
		}
		$response = array();
		
		// setup config validation
		$config = array(
			
			array(
				'field' => 'tgl_transaksi',
				'label' => 'Tgl Transaksi',
				'rules' => 'trim|required'
			),
			array(
				'field' => 'nama',
				'label' => 'Nama',
				'rules' => 'trim|required'
			),
			array(
				'field' => 'no_ktp',
				'label' => 'No Ktp',
				'rules' => 'trim|required'
			),
			array(
				'field' => 'no_telp',
				'label' => 'No Telp',
				'rules' => 'trim|required'
			),
			array(
				'field' => 'orangtua',
				'label' => 'Orangtua',
				'rules' => 'trim|required'
			),
			array(
				'field' => 'no_telp_ortu',
				'label' => 'No Telp Ortu',
				'rules' => 'trim|required'
			),
			array(
				'field' => 'alamat_ortu',
				'label' => 'Alamat Ortu',
				'rules' => 'trim|required'
			),
			array(
				'field' => 'kamar_id',
				'label' => 'Kamar Id',
				'rules' => 'trim|required'
			),
			array(
				'field' => 'bayar',
				'label' => 'Bayar',
				'rules' => 'trim|required'
			),
		);
		$this->form_validation->set_rules($config);

		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

        if ($this->form_validation->run() == TRUE) {
			$data = array(
				'tgl_transaksi' 				=> $this->input->post('tgl_transaksi'),
				'nama' 				=> $this->input->post('nama'),
				'no_ktp' 				=> $this->input->post('no_ktp'),
				'no_telp' 				=> $this->input->post('no_telp'),
				'orangtua' 				=> $this->input->post('orangtua'),
				'no_telp_ortu' 				=> $this->input->post('no_telp_ortu'),
				'alamat_ortu' 				=> $this->input->post('alamat_ortu'),
				'kamar_id' 				=> $this->input->post('kamar_id'),
				'bayar' 				=> $this->input->post('bayar'),
			);

			$create = $this->Transaksi_model->create($data);

			$id_kamar = $this->input->post('kamar_id');
			$tgl_transaksi = $this->input->post('tgl_transaksi');
			$hrg_kamar = $this->db->get_where('kamar',array('id'=> $id_kamar))->row()->harga;
			$jum_bayar = $this->input->post('bayar');
    		if($jum_bayar===$hrg_kamar){
    			$data_kamar['status_sewa'] = 'terisi';
    			$data_kamar['tgl_terisi'] = $tgl_transaksi;
    			$data_kamar['status_bayar'] = 'lunas';
    		}else if ($jum_bayar>0 && $jum_bayar < $hrg_kamar){
    			$data_kamar['status_sewa'] = 'terisi';
    			$data_kamar['tgl_terisi'] = $tgl_transaksi;
    			$data_kamar['status_bayar'] = 'sebagian';
    		}else{
    			$data_kamar['status_sewa'] = 'terisi';
    			$data_kamar['tgl_terisi'] = $tgl_transaksi;
    			$data_kamar['status_bayar'] = 'belum';
    		}

    		$this->db->where('id', $id_kamar);
			$this->db->update('kamar', $data_kamar);

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
		if(!in_array('update_transaksi', $this->permission)) {
			redirect('dashboard', 'refresh');
		}
		$response = array();
		if($id) {
			$config = array(
				
				array(
					'field' => 'tgl_transaksi',
					'label' => 'Tgl Transaksi',
					'rules' => 'trim|required'
				),
				array(
					'field' => 'nama',
					'label' => 'Nama',
					'rules' => 'trim|required'
				),
				array(
					'field' => 'no_ktp',
					'label' => 'No Ktp',
					'rules' => 'trim|required'
				),
				array(
					'field' => 'no_telp',
					'label' => 'No Telp',
					'rules' => 'trim|required'
				),
				array(
					'field' => 'orangtua',
					'label' => 'Orangtua',
					'rules' => 'trim|required'
				),
				array(
					'field' => 'no_telp_ortu',
					'label' => 'No Telp Ortu',
					'rules' => 'trim|required'
				),
				array(
					'field' => 'alamat_ortu',
					'label' => 'Alamat Ortu',
					'rules' => 'trim|required'
				),
				array(
					'field' => 'kamar_id',
					'label' => 'Kamar Id',
					'rules' => 'trim|required'
				),
				array(
					'field' => 'bayar',
					'label' => 'Bayar',
					'rules' => 'trim|required'
				),
			);
			$this->form_validation->set_rules($config);
			$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

	        if ($this->form_validation->run() == TRUE) {
				$data = array(
					
					'tgl_transaksi' 			=> $this->input->post('tgl_transaksi'),
					
					'nama' 			=> $this->input->post('nama'),
					
					'no_ktp' 			=> $this->input->post('no_ktp'),
					
					'no_telp' 			=> $this->input->post('no_telp'),
					
					'orangtua' 			=> $this->input->post('orangtua'),
					
					'no_telp_ortu' 			=> $this->input->post('no_telp_ortu'),
					
					'alamat_ortu' 			=> $this->input->post('alamat_ortu'),
					
					'kamar_id' 			=> $this->input->post('kamar_id'),
					
					'bayar' 			=> $this->input->post('bayar'),
					
				);
	        	$update = $this->Transaksi_model->update($data, $id);
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
		if(!in_array('delete_transaksi', $this->permission)) {
			redirect('dashboard', 'refresh');
		}
		
		$id = $this->input->post('id');
		$response = array();
		if($id) {

			$delete = $this->Transaksi_model->remove($id);
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